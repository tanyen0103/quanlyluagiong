<?php

namespace App\Http\Controllers;

use App\Models\GiaiDoanTruongThanh;
use Illuminate\Http\Request;

class GiaiDoanTruongThanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:giaidoantruongthanh-list|giaidoantruongthanh-create|giaidoantruongthanh-edit|giaidoantruongthanh-delete', ['only' => ['index','show']]);
         $this->middleware('permission:giaidoantruongthanh-create', ['only' => ['create','store']]);
         $this->middleware('permission:giaidoantruongthanh-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:giaidoantruongthanh-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giaidoantruongthanhs = GiaiDoanTruongThanh::oldest()->paginate(5);

        return view('admin.giaidoantruongthanhs.index', ["title" => "Bảng giai đoạn trưởng thành"],
                    compact('giaidoantruongthanhs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.giaidoantruongthanhs.create', ["title" => "Bảng giai đoạn trưởng thành"]);
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
            'giaidoantt_ten' => ['required', 'unique:giaidoantruongthanh', 'max:255'],
            'giaidoantt_mota' => [''],
        ]);

        GiaiDoanTruongThanh::create($request->all());

        return redirect()->route('giaidoantruongthanhs.index')
                        ->with('success','Giai đoạn trưởng thành đã được tạo thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GiaiDoanTruongThanh  $giaidoantruongthanh
     * @return \Illuminate\Http\Response
     */
    public function show(GiaiDoanTruongThanh $giaidoantruongthanh)
    {
        return view('admin.giaidoantruongthanhs.show', ["title" => "Bảng giai đoạn trưởng thành"], compact('giaidoantruongthanh'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GiaiDoanTruongThanh  $giaidoantruongthanh
     * @return \Illuminate\Http\Response
     */
    public function edit(GiaiDoanTruongThanh $giaidoantruongthanh)
    {
        return view('admin.giaidoantruongthanhs.edit', ["title" => "Bảng giai đoạn trưởng thành"], compact('giaidoantruongthanh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GiaiDoanTruongThanh  $giaiDoanTruongThanh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GiaiDoanTruongThanh $giaidoantruongthanh)
    {
        $request->validate([
            'giaidoantt_ten' => ['required', 'max:255'],
            'giaidoantt_mota' => ['']
        ]);

        $giaidoantruongthanh ->update($request -> all());

        return redirect()->route('giaidoantruongthanhs.index')
                        ->with('Thành công', 'Giai đoạn trưởng thành cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GiaiDoanTruongThanh  $giaiDoanTruongThanh
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaiDoanTruongThanh $giaidoantruongthanh)
    {
        $giaidoantruongthanh -> delete();
        return redirect()->route('giaidoantruongthanhs.index')
                        ->with('Thành công', 'Giai đoạn trưởng thành xoá thành công');
    }
}
