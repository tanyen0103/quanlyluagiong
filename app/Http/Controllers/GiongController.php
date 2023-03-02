<?php

namespace App\Http\Controllers;

use App\Models\Giong;
use App\Models\KieuHinh;
use App\Models\NhomGiong;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;

class GiongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giongs = Giong::oldest()->paginate(5);

        return view('admin.giongs.index', ["title" => "Bảng giống"],
                    compact('giongs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nhomgiong = NhomGiong::all();
        $kieuhinh = KieuHinh::all();
        $giong = Giong::all();
        return view('admin.giongs.create', ["title" => "Bảng giống"], compact('nhomgiong', 'kieuhinh', 'giong'));
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
            'giong_ten' => ['required','max:255'],
            'nhomgiong_id' => ['required'],
            'kieuhinh_id' => ['required'],
            'giong_nguongoc' => [''],
            'giong_mota' => [''],
            'giong_hinhanh' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);

        // Upload tập tin
        if ($request->hasFile('giong_hinhanh')) {
            $file = $request->file('giong_hinhanh');
		    $path = $request->giong_hinhanh->storeAs('images', Str::slug($request->giong_ten) . '.' . $request->giong_hinhanh->extension());

        }

        $g = new Giong();
        $g->giong_ten = $request->giong_ten;
        $g->giong_ten_slug = Str::slug($request->giong_ten);
        $g->nhomgiong_id = $request->nhomgiong_id;
        $g->kieuhinh_id = $request->kieuhinh_id;
        $g->giong_nguongoc = $request->giong_nguongoc;
        $g->giong_mota = $request->giong_mota;
        $g->giong_hinhanh = $path;
        $g->save();

        return redirect()->route('giongs.index')
                        ->with('success','Giống được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Giong  $giong
     * @return \Illuminate\Http\Response
     */
    public function show(Giong $giong)
    {
        $nhomgiong = NhomGiong::all();
        $kieuhinh = KieuHinh::all();
        return view('admin.giongs.show', ["title" => "Bảng giống"], compact('nhomgiong', 'kieuhinh', 'giong'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Giong  $giong
     * @return \Illuminate\Http\Response
     */
    public function edit(Giong $giong)
    {
        $nhomgiong =NhomGiong::all();
        $kieuhinh = KieuHinh::all();
        return view('admin.giongs.edit', ["title" => "Bảng giống"], compact('nhomgiong', 'kieuhinh', 'giong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Giong  $giong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Giong $giong)
    {
        $request->validate([
            'giong_ten' => ['required','max:255'],
            'nhomgiong_id' => ['required'],
            'kieuhinh_id' => ['required'],
            'giong_nguongoc' => [''],
            'giong_mota' => [''],
            'giong_hinhanh' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);

        // Upload tập tin nếu có
		if($request->hasFile('giong_hinhanh'))
		{
			$file = $request->file('giong_hinhanh');
			$path = $request->giong_hinhanh->storeAs('images', Str::slug($request->giong_ten) . '.' . $request->giong_hinhanh->extension());

            Storage::delete($giong->giong_hinhanh);
		}

        $giong->giong_ten = $request->giong_ten;
        $giong->giong_ten_slug = Str::slug($request->giong_ten);
        $giong->nhomgiong_id = $request->nhomgiong_id;
        $giong->kieuhinh_id = $request->kieuhinh_id;
        $giong->giong_nguongoc = $request->giong_nguongoc;
        $giong->giong_mota = $request->giong_mota;
        if($request->hasFile('giong_hinhanh'))
            $giong->giong_hinhanh = $path;
        $giong->save();

        return redirect()->route('giongs.index')
                        ->with('success','Giống được tạo thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Giong  $giong
     * @return \Illuminate\Http\Response
     */
    public function destroy(Giong $giong)
    {
        // Delete the record from the database
        $giong->delete();

        // Delete the associated image file from the disk
        Storage::delete($giong->giong_hinhanh);

        // Redirect the user back to the index page with a success message
        return redirect()->route('giongs.index')->with('success','Giống xoá thành công');

    }
}
