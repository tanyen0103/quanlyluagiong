<?php

namespace App\Http\Controllers;

use App\Models\LoaiSauBenh;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LoaiSauBenhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:loaisaubenh-list|loaisaubenh-create|loaisaubenh-edit|loaisaubenh-delete', ['only' => ['index','show']]);
         $this->middleware('permission:loaisaubenh-create', ['only' => ['create','store']]);
         $this->middleware('permission:loaisaubenh-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:loaisaubenh-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaisaubenhs = LoaiSauBenh::oldest()->paginate(4);

        return view('admin.loaisaubenhs.index', ["title" => "Bảng loại sâu bệnh"],
                    compact('loaisaubenhs'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaisaubenhs.create', ["title" => "Bảng loại sâu bệnh"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'loaisaubenh_ten' => ['required','unique:loaisaubenh','max:100'],
            'loaisaubenh_donvi' => ['max:100'],
            'loaisaubenh_mota' => [''],
            'loaisaubenh_hinhanh' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']

        ]);
        $loaisaubenh = new LoaiSauBenh();
        $loaisaubenh->loaisaubenh_ten = $request->loaisaubenh_ten;
        $loaisaubenh->loaisaubenh_ten_slug = Str::slug($request->loaisaubenh_ten);
        $loaisaubenh->loaisaubenh_mota = $request->loaisaubenh_mota;
        $loaisaubenh->loaisaubenh_donvi = $request->loaisaubenh_donvi;

        // Check if directory exists and create it if necessary
        if (!File::isDirectory($loaisaubenh->loaisaubenh_ten_slug)) {
            Storage::makeDirectory($loaisaubenh->loaisaubenh_ten_slug, 0775);
        }

        $path = "";

        if ($request->hasFile('loaisaubenh_hinhanh')) {
            // Delete old image (if any)
            if ($loaisaubenh->loaisaubenh_hinhanh) {
                Storage::delete($loaisaubenh->loaisaubenh_hinhanh);
            }

            // Save new image
            $originalName = $request->file('loaisaubenh_hinhanh')->getClientOriginalName();
            $extension = $request->file('loaisaubenh_hinhanh')->getClientOriginalExtension();
            $fileName = Str::slug($request->loaisaubenh_ten) .'_'. time() . '.' . $extension;
            $path = $request->file('loaisaubenh_hinhanh')->storeAs($loaisaubenh->loaisaubenh_ten_slug, $fileName);
        }

        if(!$path)
        {
            $path = "images/default/image_default.jpg";
        }

        $loaisaubenh->loaisaubenh_hinhanh = $path;
        $loaisaubenh->save();

        return redirect()->route('loaisaubenhs.index')
                        ->with('success', 'Loại sâu bệnh được tạo thành công.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiSauBenh  $loaiSauBenh
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSauBenh $loaisaubenh)
    {
        return view('admin.loaisaubenhs.show',  ["title" => "Bảng loại sâu bệnh đo"],compact('loaisaubenh'));

    }

    /**
     * Show the form for editinloaisaubenh the specified resource.
     *
     * @param  \App\Models\LoaiSauBenh  $loaiSauBenh
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSauBenh $loaisaubenh)
    {
        return view('admin.loaisaubenhs.edit',  ["title" => "Bảng loại sâu bệnh đo"],compact('loaisaubenh'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoaiSauBenh  $loaiSauBenh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSauBenh $loaisaubenh)
    {
        $request->validate([
            'loaisaubenh_ten' => ['required','max:100'],
            'loaisaubenh_donvi' => ['max:100'],
            'loaisaubenh_mota' => [''],
            'loaisaubenh_hinhanh' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']

        ]);


        // Upload tập tin nếu có
		if($request->hasFile('loaisaubenh_hinhanh'))
		{
            if ($loaisaubenh->loaisaubenh_hinhanh && $loaisaubenh->loaisaubenh_hinhanh !== 'images/default/image_default.jpg') {
                // Xóa tệp ảnh cũ
                Storage::delete($loaisaubenh->loaisaubenh_hinhanh);
            }

            $extension = $request->file('loaisaubenh_hinhanh')->extension();
            $newfilename = Str::slug($request->loaisaubenh_ten, '-') .'_'. time(). '.' . $extension;

            $path = Storage::putFileAs($loaisaubenh->loaisaubenh_ten_slug, $request->file('loaisaubenh_hinhanh'), $newfilename);

		}

        $loaisaubenh->loaisaubenh_ten = $request->loaisaubenh_ten;
        $loaisaubenh->loaisaubenh_ten_slug = Str::slug($request->loaisaubenh_ten);
        $loaisaubenh->loaisaubenh_mota = $request->loaisaubenh_mota;
        $loaisaubenh->loaisaubenh_donvi = $request->loaisaubenh_donvi;
        if($request->hasFile('loaisaubenh_hinhanh'))
            $loaisaubenh->loaisaubenh_hinhanh = $path;
        $loaisaubenh->save();

        return redirect()->route('loaisaubenhs.index')
                        ->with('success','Loại sâu bệnh được tạo thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiSauBenh  $loaiSauBenh
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiSauBenh $loaisaubenh)
    {
        // Delete the record from the database
        $loaisaubenh->delete();

        if ($loaisaubenh->loaisaubenh_hinhanh && $loaisaubenh->loaisaubenh_hinhanh !== 'images/default/image_default.jpg') {
            // Delete the associated image file from the disk
            Storage::delete($loaisaubenh->loaisaubenh_hinhanh);
        }

        // Redirect the user back to the index page with a success message
        return redirect()->route('loaisaubenhs.index')->with('success','Loại sâu bệnh xoá thành công');
    }
}
