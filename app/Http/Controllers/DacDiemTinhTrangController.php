<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DacDiemTinhTrang;
use App\Models\DoiTuongTinhTrang;

class DacDiemTinhTrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dacdiemtinhtrangs = DacDiemTinhTrang::oldest()->paginate(5);

        return view('admin.dacdiemtinhtrangs.index', ["title" => "Bảng đặc điểm tính trạng"],
                    compact('dacdiemtinhtrangs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doituongtinhtrang = DoiTuongTinhTrang::all();
        $dacdiemtinhtrang = DacDiemTinhTrang::all();
        return view('admin.dacdiemtinhtrangs.create', ["title" => "Bảng đặc điểm tính trạng"], compact('doituongtinhtrang', 'dacdiemtinhtrang'));
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
            'dacdiemtt_ten' => ['required','unique:dacdiemtinhtrang','max:255'],
            'doituongtinhtrang_id' => ['required'],
        ]);

        $dacdiemtinhtrang = new DacDiemTinhTrang();
        $dacdiemtinhtrang->dacdiemtt_ten = $request->dacdiemtt_ten;
        $dacdiemtinhtrang->doituongtinhtrang_id = $request->doituongtinhtrang_id;

        $dacdiemtinhtrang->save();

        return redirect()->route('dacdiemtinhtrangs.index')
                        ->with('success','Đặc điểm tính trạng được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DacDiemTinhTrang  $dacdiemtinhtrang
     * @return \Illuminate\Http\Response
     */
    public function show(DacDiemTinhTrang $dacdiemtinhtrang)
    {
        $doituongtinhtrang = DoiTuongTinhTrang::all();
        return view('admin.dacdiemtinhtrangs.show', ["title" => "Bảng đặc điểm tính trạng"], compact('doituongtinhtrang', 'dacdiemtinhtrang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DacDiemTinhTrang  $dacdiemtinhtrang
     * @return \Illuminate\Http\Response
     */
    public function edit(DacDiemTinhTrang $dacdiemtinhtrang)
    {
        $doituongtinhtrang = DoiTuongTinhTrang::all();
        return view('admin.dacdiemtinhtrangs.edit', ["title" => "Bảng đặc điểm tính trạng"], compact('doituongtinhtrang', 'dacdiemtinhtrang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DacDiemTinhTrang  $dacdiemtinhtrang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DacDiemTinhTrang $dacdiemtinhtrang)
    {
        $request->validate([
            'dacdiemtt_ten' => ['required','max:255'],
            'doituongtinhtrang_id' => ['required'],
        ]);

        $dacdiemtinhtrang->dacdiemtt_ten = $request->dacdiemtt_ten;
        $dacdiemtinhtrang->doituongtinhtrang_id = $request->doituongtinhtrang_id;

        $dacdiemtinhtrang->save();

        return redirect()->route('dacdiemtinhtrangs.index')
                        ->with('success','Đặc điểm tính trạng được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DacDiemTinhTrang  $dacdiemtinhtrang
     * @return \Illuminate\Http\Response
     */
    public function destroy(DacDiemTinhTrang $dacdiemtinhtrang)
    {
        $dacdiemtinhtrang->delete();

        return redirect()->route('dacdiemtinhtrangs.index')
                        ->with('success','Đặc điểm tính trạng được xoá thành công.');
    }
}
