<?php

namespace App\Http\Controllers;

use App\Models\MaNgoaiDong;
use App\Models\Giong;
use Illuminate\Http\Request;

class MaNgoaiDongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:mangoaidong-list|mangoaidong-create|mangoaidong-edit|mangoaidong-delete', ['only' => ['index','show']]);
         $this->middleware('permission:mangoaidong-create', ['only' => ['create','store']]);
         $this->middleware('permission:mangoaidong-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:mangoaidong-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangoaidongs = MaNgoaiDong::oldest()->paginate(4);

        return view('admin.mangoaidongs.index', ["title" => "Bảng mã ngoài đồng"],
                    compact('mangoaidongs'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giong = Giong::all();
        $mangoaidong = MaNgoaiDong::all();
        return view('admin.mangoaidongs.create', ["title" => "Bảng ngoài đồng"], compact('giong' , 'mangoaidong'));
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
            'field_code' => ['required','unique:mangoaidong','max:50'],
            'giong_id' => ['required'],
            'field_mota' => ['']
        ]);

        $f = new MaNgoaiDong();
        $f->field_code = $request->field_code;
        $f->giong_id = $request->giong_id;
        $f->field_mota = $request->field_mota;

        $f->save();

        return redirect()->route('mangoaidongs.index')
                        ->with('success','Mã ngoài đồng được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaNgoaiDong  $maNgoaiDong
     * @return \Illuminate\Http\Response
     */
    public function show(MaNgoaiDong $mangoaidong)
    {
        $giong = Giong::all();
        return view('admin.mangoaidongs.show', ["title" => "Bảng mã ngoài đồng"], compact('giong' , 'mangoaidong'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaNgoaiDong  $maNgoaiDong
     * @return \Illuminate\Http\Response
     */
    public function edit(MaNgoaiDong $mangoaidong)
    {
        $giong = Giong::all();
        return view('admin.mangoaidongs.edit', ["title" => "Bảng mã ngoài đồng"], compact('giong' , 'mangoaidong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaNgoaiDong  $maNgoaiDong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaNgoaiDong $mangoaidong)
    {
        $request->validate([
            'field_code' => ['required','max:50'],
            'giong_id' => ['required'],
            'field_mota' => ['']
        ]);

        // $f = MaNgoaiDong::find($mangoaidong);
        $mangoaidong->field_code = $request->field_code;
        $mangoaidong->giong_id = $request->giong_id;
        $mangoaidong->field_mota = $request->field_mota;
        $mangoaidong->save();

        return redirect()->route('mangoaidongs.index')
                        ->with('success','Mã ngoài đồng được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaNgoaiDong  $maNgoaiDong
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaNgoaiDong $mangoaidong)
    {
        $mangoaidong->delete();

        return redirect()->route('mangoaidongs.index')
                        ->with('success','Mã ngoài đồng được xoá thành công.');


    }
}
