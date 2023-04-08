<?php

namespace App\Http\Controllers;

use App\Models\DoiTuongTinhTrang;
use App\Models\GiaiDoanTruongThanh;
use Illuminate\Http\Request;

class DoiTuongTinhTrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:doituongtinhtrang-list|doituongtinhtrang-create|doituongtinhtrang-edit|doituongtinhtrang-delete', ['only' => ['index','show']]);
         $this->middleware('permission:doituongtinhtrang-create', ['only' => ['create','store']]);
         $this->middleware('permission:doituongtinhtrang-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:doituongtinhtrang-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doituongtinhtrangs = DoiTuongTinhTrang::orderBy('doituongtt_ten', 'asc')->paginate(4);

        return view('admin.doituongtinhtrangs.index', ["title" => "Bảng đối tượng tính trạng"],
                    compact('doituongtinhtrangs'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giaidoantruongthanh = GiaiDoanTruongThanh::all();
        $doituongtinhtrang = DoiTuongTinhTrang::all();
        return view('admin.doituongtinhtrangs.create', ["title" => "Bảng đối tượng tính trạng"], compact('giaidoantruongthanh' , 'doituongtinhtrang'));
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
            'doituongtt_ten' => ['required','max:255'],
            'giaidoantruongthanh_id' => ['required'],
            'doituongtt_mota' => ['']
        ]);

        $doituongtinhtrang = new DoiTuongTinhTrang();
        $doituongtinhtrang->doituongtt_ten = $request->doituongtt_ten;
        $doituongtinhtrang->giaidoantruongthanh_id = $request->giaidoantruongthanh_id;
        $doituongtinhtrang->doituongtt_mota = $request->doituongtt_mota;

        $doituongtinhtrang->save();

        return redirect()->route('doituongtinhtrangs.index')
                        ->with('success','Đối tượng tính trạng được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoiTuongTinhTrang  $doituongtinhtrang
     * @return \Illuminate\Http\Response
     */
    public function show(DoiTuongTinhTrang $doituongtinhtrang)
    {
        $giaidoantruongthanh = GiaiDoanTruongThanh::all();
        return view('admin.doituongtinhtrangs.show', ["title" => "Bảng đối tượng tính trạng"], compact('giaidoantruongthanh' , 'doituongtinhtrang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoiTuongTinhTrang  $doituongtinhtrang
     * @return \Illuminate\Http\Response
     */
    public function edit(DoiTuongTinhTrang $doituongtinhtrang)
    {
        $giaidoantruongthanh = GiaiDoanTruongThanh::all();
        return view('admin.doituongtinhtrangs.edit', ["title" => "Bảng đối tượng tính trạng"], compact('giaidoantruongthanh' , 'doituongtinhtrang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DoiTuongTinhTrang  $doituongtinhtrang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoiTuongTinhTrang $doituongtinhtrang)
    {
        $request->validate([
            'doituongtt_ten' => ['required','max:255'],
            'giaidoantruongthanh_id' => ['required'],
            'doituongtt_mota' => ['']
        ]);


        $doituongtinhtrang->doituongtt_ten = $request->doituongtt_ten;
        $doituongtinhtrang->giaidoantruongthanh_id = $request->giaidoantruongthanh_id;
        $doituongtinhtrang->doituongtt_mota = $request->doituongtt_mota;

        $doituongtinhtrang->save();

        return redirect()->route('doituongtinhtrangs.index')
                        ->with('success','Đối tượng tính trạng được chỉnh sửa thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoiTuongTinhTrang  $doituongtinhtrang
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoiTuongTinhTrang $doituongtinhtrang)
    {
        $doituongtinhtrang->delete();

        return redirect()->route('doituongtinhtrangs.index')
                        ->with('success','Đối tượng tính trạng đã được xoá thành công.');
    }
}
