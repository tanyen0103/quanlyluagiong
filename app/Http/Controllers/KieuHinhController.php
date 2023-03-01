<?php

namespace App\Http\Controllers;

use App\Models\KieuHinh;
use Illuminate\Http\Request;

class KieuHinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kieuhinhs = KieuHinh::oldest()->paginate(5);

        return view('admin.kieuhinhs.index', ["title" => "Bảng kiểu hình"],
                    compact('kieuhinhs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kieuhinhs.create', ["title" => "Bảng kiểu hình"]);
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
            'kieuhinh_ten' => ['required', 'unique:kieuhinh', 'max:255'],
            'kieuhinh_mota' => [''],
        ]);

        KieuHinh::create($request->all());

        return redirect()->route('kieuhinhs.index')
                        ->with('success','Kiểu hình đã được tạo thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KieuHinh  $kieuhinh
     * @return \Illuminate\Http\Response
     */
    public function show(KieuHinh $kieuhinh)
    {
        return view('admin.kieuhinhs.show', ["title" => "Bảng giống"], compact('kieuhinh'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KieuHinh  $kieuhinh
     * @return \Illuminate\Http\Response
     */
    public function edit(KieuHinh $kieuhinh)
    {
        return view('admin.kieuhinhs.edit', ["title" => "Bảng giống"], compact('kieuhinh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KieuHinh  $kieuhinh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KieuHinh $kieuhinh)
    {
        $request->validate([
            'kieuhinh_ten' => ['required', 'max:255'],
            'kieuhinh_mota' => ['']
        ]);

        $kieuhinh ->update($request -> all());

        return redirect()->route('kieuhinhs.index')
                        ->with('Thành công', 'Kiểu hình cập nhật thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KieuHinh  $kieuhinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(KieuHinh $kieuhinh)
    {
        $kieuhinh -> delete();
        return redirect()->route('kieuhinhs.index')
                        ->with('Thành công', 'Kiểu hình xoá thành công');

    }
}
