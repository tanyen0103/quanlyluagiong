<?php

namespace App\Http\Controllers;

use App\Models\NhomGiong;
use Illuminate\Http\Request;

class NhomGiongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:nhomgiong-list|nhomgiong-create|nhomgiong-edit|nhomgiong-delete', ['only' => ['index','show']]);
         $this->middleware('permission:nhomgiong-create', ['only' => ['create','store']]);
         $this->middleware('permission:nhomgiong-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:nhomgiong-delete', ['only' => ['destroy']]);
    }

    public function info()
    {
        return view('admin.nhomgiongs.info', ["title" => "Bảng nhóm giống"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nhomgiongs = NhomGiong::oldest()->paginate(4);
        $nhomgiongs = NhomGiong::orderBy('nhomgiong_code', 'asc')->paginate(4);

        return view('admin.nhomgiongs.index', ["title" => "Bảng nhóm giống"],
                    compact('nhomgiongs'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nhomgiongs.create', ["title" => "Bảng nhóm giống"]);
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
            'nhomgiong_code' => ['required','unique:nhomgiong','max:10'],
            'nhomgiong_ten' => ['required','max:255'],
            'nhomgiong_mota' => [''],
            'nhomgiong_ngayngam' => [''],
            'nhomgiong_ngaycay' => [''],
        ]);

        NhomGiong::create($request->all());

        return redirect()->route('nhomgiongs.index')
                        ->with('success','Nhóm giống được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NhomGiong  $nhomGiong
     * @return \Illuminate\Http\Response
     */
    public function show(NhomGiong $nhomgiong)
    {
        return view('admin.nhomgiongs.show',  ["title" => "Bảng giống"],compact('nhomgiong'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NhomGiong  $nhomgiong
     * @return \Illuminate\Http\Response
     */
    public function edit(NhomGiong $nhomgiong)
    {
        return view('admin.nhomgiongs.edit', ["title" => "Bảng giống"], compact('nhomgiong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NhomGiong  $nhomgiong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NhomGiong $nhomgiong)
    {
        $request->validate([
            'nhomgiong_code' => ['required','max:10'],
            'nhomgiong_ten' => ['required','max:255'],
            'nhomgiong_mota' => [''],
            'nhomgiong_ngayngam' => [''],
            'nhomgiong_ngaycay' => [''],
        ]);

        $nhomgiong->update($request->all());

        return redirect()->route('nhomgiongs.index')
                        ->with('success','Nhóm giống cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NhomGiong  $nhomGiong
     * @return \Illuminate\Http\Response
     */
    public function destroy(NhomGiong $nhomgiong)
    {
        $nhomgiong->delete();

        return redirect()->route('nhomgiongs.index')
                        ->with('success','Nhóm giống xoá thành công');
    }
}
