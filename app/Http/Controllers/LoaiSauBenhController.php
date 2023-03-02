<?php

namespace App\Http\Controllers;

use App\Models\LoaiSauBenh;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoaiSauBenhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaisaubenhs = LoaiSauBenh::oldest()->paginate(10);

        return view('admin.loaisaubenhs.index', ["title" => "Bảng loại sâu bệnh"],
                    compact('loaisaubenhs'))->with('i', (request()->input('page', 1) - 1) * 10);
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

        // Upload tập tin
        if ($request->hasFile('loaisaubenh_hinhanh')) {
            $file = $request->file('loaisaubenh_hinhanh');
		    $path = $request->loaisaubenh_hinhanh->storeAs('images', Str::slug($request->loaisaubenh_ten) . '.' . $request->loaisaubenh_hinhanh->extension());

        }

        $loaisaubenh = new LoaiSauBenh();
        $loaisaubenh->loaisaubenh_ten = $request->loaisaubenh_ten;
        $loaisaubenh->loaisaubenh_ten_slug = Str::slug($request->loaisaubenh_ten);
        $loaisaubenh->loaisaubenh_mota = $request->loaisaubenh_mota;
        $loaisaubenh->loaisaubenh_donvi = $request->loaisaubenh_donvi;
        $loaisaubenh->loaisaubenh_hinhanh = $path;
        $loaisaubenh->save();

        return redirect()->route('loaisaubenhs.index')
                        ->with('success','Loại sâu bệnh được tạo thành công.');
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

        // Upload tập tin
        if ($request->hasFile('loaisaubenh_hinhanh')) {
            $file = $request->file('loaisaubenh_hinhanh');
		    $path = $request->loaisaubenh_hinhanh->storeAs('images', Str::slug($request->loaisaubenh_ten) . '.' . $request->loaisaubenh_hinhanh->extension());

            Storage::delete($loaisaubenh->loaisaubenh_hinhanh);
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

        // Delete the associated image file from the disk
        Storage::delete($loaisaubenh->loaisaubenh_hinhanh);

        // Redirect the user back to the index page with a success message
        return redirect()->route('loaisaubenhs.index')->with('success','Loại sâu bệnh xoá thành công');
    }
}
