<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiaTriTinhTrang;
use App\Models\DacDiemTinhTrang;

class GiaTriTinhTrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatritinhtrangs = GiaTriTinhTrang::oldest()->paginate(5);

        return view('admin.giatritinhtrangs.index', ["title" => "Bảng giá trị tính trạng"],
                    compact('giatritinhtrangs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dacdiemtinhtrang = DacDiemTinhTrang::all();
        $giatritinhtrang = GiaTriTinhTrang::all();
        return view('admin.giatritinhtrangs.create', ["title" => "Bảng giá trị tính trạng"], compact('dacdiemtinhtrang', 'giatritinhtrang'));
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
            'giatritt_diem' => ['required', 'unique:giatritinhtrang', 'max:10'],
            'dacdiemtinhtrang_id' => ['required']
        ]);

        $giatritinhtrang = new GiaTriTinhTrang();
        $giatritinhtrang->giatritt_diem = $request->giatritt_diem;
        $giatritinhtrang->dacdiemtinhtrang_id = $request->dacdiemtinhtrang_id;

        $giatritinhtrang->save();

        return redirect()->route('giatritinhtrangs.index')
                        ->with('success','Giá trị tính trạng được tạo thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GiaTriTinhTrang  $giatritinhtrang
     * @return \Illuminate\Http\Response
     */
    public function show(GiaTriTinhTrang $giatritinhtrang)
    {
        $dacdiemtinhtrang = DacDiemTinhTrang::all();
        return view('admin.giatritinhtrangs.show', ["title" => "Bảng giá trị tính trạng"], compact('dacdiemtinhtrang', 'giatritinhtrang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GiaTriTinhTrang  $giatritinhtrang
     * @return \Illuminate\Http\Response
     */
    public function edit(GiaTriTinhTrang $giatritinhtrang)
    {
        $dacdiemtinhtrang = DacDiemTinhTrang::all();
        return view('admin.giatritinhtrangs.edit', ["title" => "Bảng đặc điểm tính trạng"], compact('dacdiemtinhtrang', 'giatritinhtrang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GiaTriTinhTrang   $giatritinhtrang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GiaTriTinhTrang  $giatritinhtrang)
    {
        $request->validate([
            'giatritt_diem' => ['required', 'max:10'],
            'dacdiemtinhtrang_id' => ['required'],
        ]);


        $giatritinhtrang->giatritt_diem = $request->giatritt_diem;
        $giatritinhtrang->dacdiemtinhtrang_id = $request->dacdiemtinhtrang_id;

        $giatritinhtrang->save();

        return redirect()->route('giatritinhtrangs.index')
                        ->with('success','Giá trị tính trạng được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GiaTriTinhTrang   $giatritinhtrang
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriTinhTrang  $giatritinhtrang)
    {
        $giatritinhtrang -> delete();
        return redirect()->route('giatritinhtrangs.index')
                        ->with('success','Giá trị tính trạng được xoá thành công.');
    }
}
