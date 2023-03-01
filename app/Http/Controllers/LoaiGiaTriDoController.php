<?php

namespace App\Http\Controllers;

use App\Models\LoaiGiaTriDo;
use Illuminate\Http\Request;

class LoaiGiaTriDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaigiatridos = LoaiGiaTriDo::oldest()->paginate(10);

        return view('admin.loaigiatridos.index', ["title" => "Bảng loại giá trị đo"],
                    compact('loaigiatridos'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaigiatridos.create', ["title" => "Bảng loại giá trị đo"]);
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
            'loaigiatrido_ten' => ['required','unique:loaigiatrido','max:100'],
            'loaigiatrido_donvi' => ['required','max:100'],

        ]);

        LoaiGiaTriDo::create($request->all());

        return redirect()->route('loaigiatridos.index')
                        ->with('success','Loại giá trị đo được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiGiaTriDo  $loaigiatrido
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiGiaTriDo $loaigiatrido)
    {
        return view('admin.loaigiatridos.show',  ["title" => "Bảng loại giá trị đo"],compact('loaigiatrido'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiGiaTriDo  $lloaigiatrido
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiGiaTriDo $loaigiatrido)
    {
        return view('admin.loaigiatridos.edit', ["title" => "Bảng loại giá trị đo"], compact('loaigiatrido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoaiGiaTriDo  $loaigiatrido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiGiaTriDo $loaigiatrido)
    {
        $request->validate([
            'loaigiatrido_ten' => ['required','max:100'],
            'loaigiatrido_donvi' => ['required','max:100'],

        ]);

        $loaigiatrido->update($request->all());

        return redirect()->route('loaigiatridos.index')
                        ->with('success','Loại giá trị đo được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiGiaTriDo  $loaiGiaTriDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiGiaTriDo $loaigiatrido)
    {
        $loaigiatrido->delete();
        return redirect()->route('loaigiatridos.index')
                ->with('success','Loại giá trị đo được xoá thành công.');
    }
}
