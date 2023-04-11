<?php

namespace App\Http\Controllers;

use App\Models\LoaiSauBenh;
use Illuminate\Http\Request;
use App\Models\ChiTieuSauBenh;
use App\Models\GiaTriDoSauBenh;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\GiaTriDoSauBenhsExport;

class GiaTriDoSauBenhController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        return Excel::download(new GiaTriDoSauBenhsExport, 'giatridosaubenhs-danhsach.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:giatridosaubenh-list|giatridosaubenh-create|giatridosaubenh-edit|giatridosaubenh-delete', ['only' => ['index','show']]);
         $this->middleware('permission:giatridosaubenh-create', ['only' => ['create','store']]);
         $this->middleware('permission:giatridosaubenh-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:giatridosaubenh-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatridosaubenhs = GiaTriDoSauBenh::with('ChiTieuSauBenh', 'LoaiSauBenh')
        ->orderBy('chitieusaubenh_id', 'asc')
        ->orderBy('loaisaubenh_id', 'asc')
        ->paginate(4);

        return view('admin.giatridosaubenhs.index', ["title" => "Bảng giá trị đo sâu bệnh"],
                    compact('giatridosaubenhs'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chitieusaubenh = ChiTieuSauBenh::all();
        $loaisaubenh = LoaiSauBenh::all();
        $giatridosaubenh = GiaTriDosaubenh::all();
        return view('admin.giatridosaubenhs.create', ["title" => "Bảng giá trị đo trong nhà"], compact('chitieusaubenh', 'loaisaubenh', 'giatridosaubenh'));
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
            'giatridosaubenh_giatri' => ['required','numeric'],
            'loaisaubenh_id' => ['required'],
            'chitieusaubenh_id' => ['required'],
        ]);


        $giatridosaubenh = new GiaTriDoSauBenh();
        $giatridosaubenh->giatridosaubenh_giatri = $request->giatridosaubenh_giatri;
        $giatridosaubenh->loaisaubenh_id = $request->loaisaubenh_id;
        $giatridosaubenh->chitieusaubenh_id = $request->chitieusaubenh_id;

        $giatridosaubenh->save();

        return redirect()->route('giatridosaubenhs.index')
                        ->with('success','Giá trị đo sâu bệnh được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GiaTriDoSauBenh  $giatridosaubenh
     * @return \Illuminate\Http\Response
     */
    public function show(GiaTriDoSauBenh $giatridosaubenh)
    {
        $chitieusaubenh = ChiTieuSauBenh::all();
        $loaisaubenh = LoaiSauBenh::all();
        return view('admin.giatridosaubenhs.show', ["title" => "Bảng giá trị đo ngoài đồng"], compact('chitieusaubenh', 'loaisaubenh', 'giatridosaubenh'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GiaTriDoSauBenh  $giatridosaubenh
     * @return \Illuminate\Http\Response
     */
    public function edit(GiaTriDoSauBenh $giatridosaubenh)
    {
        $chitieusaubenh = ChiTieuSauBenh::all();
        $loaisaubenh = LoaiSauBenh::all();
        return view('admin.giatridosaubenhs.edit', ["title" => "Bảng giá trị đo ngoài đồng"], compact('chitieusaubenh', 'loaisaubenh', 'giatridosaubenh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GiaTriDoSauBenh  $giatridosaubenh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GiaTriDoSauBenh $giatridosaubenh)
    {
        $request->validate([
            'giatridosaubenh_giatri' => ['required','numeric'],
            'loaisaubenh_id' => ['required'],
            'chitieusaubenh_id' => ['required'],
        ]);

        $giatridosaubenh->giatridosaubenh_giatri = $request->giatridosaubenh_giatri;
        $giatridosaubenh->loaisaubenh_id = $request->loaisaubenh_id;
        $giatridosaubenh->chitieusaubenh_id = $request->chitieusaubenh_id;

        $giatridosaubenh->save();

        return redirect()->route('giatridosaubenhs.index')
                        ->with('success','Giá trị đo sâu bệnh được tạo thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GiaTriDoSauBenh  $giatridosaubenh
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriDoSauBenh $giatridosaubenh)
    {
        $giatridosaubenh -> delete();
        return redirect()->route('giatridosaubenhs.index')->with('success','Giá trị đo sâu bệnh xoá thành công');

    }
}
