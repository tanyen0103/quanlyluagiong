<?php

namespace App\Http\Controllers;

use App\Models\Giong;
use Illuminate\Http\Request;
use App\Models\ChiTieuSauBenh;

class ChiTieuSauBenhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:chitieusaubenh-list|chitieusaubenh-create|chitieusaubenh-edit|chitieusaubenh-delete', ['only' => ['index','show']]);
         $this->middleware('permission:chitieusaubenh-create', ['only' => ['create','store']]);
         $this->middleware('permission:chitieusaubenh-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:chitieusaubenh-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitieusaubenhs = ChiTieuSauBenh::oldest()->paginate(4);

        return view('admin.chitieusaubenhs.index', ["title" => "Bảng chỉ tiêu sâu bệnh"],
                    compact('chitieusaubenhs'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giong = Giong::all();
        $chitieusaubenh = ChiTieuSauBenh::all();
        return view('admin.chitieusaubenhs.create', ["title" => "Bảng chỉ tiêu sâu bệnh"], compact('giong' , 'chitieusaubenh'));
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
            'giong_id' => ['required', 'unique:chitieusaubenh,giong_id'],
            'chitieusaubenh_chonloc' => ['max:255'],
            'chitieusaubenh_danhgia' => ['']

        ]);

        $chitieusaubenh = new ChiTieuSauBenh();
        $chitieusaubenh->giong_id = $request->giong_id;
        $chitieusaubenh->chitieusaubenh_chonloc = $request->chitieusaubenh_chonloc;
        $chitieusaubenh->chitieusaubenh_danhgia = $request->chitieusaubenh_danhgia;

        $chitieusaubenh->save();

        return redirect()->route('chitieusaubenhs.index')
                        ->with('success','Chỉ tiêu sâu bệnh được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiTieuSauBenh  $chiTieuSauBenh
     * @return \Illuminate\Http\Response
     */
    public function show(ChiTieuSauBenh $chitieusaubenh)
    {
        $giong = Giong::all();
        return view('admin.chitieusaubenhs.show', ["title" => "Bảng chỉ tiêu sâu bệnh"], compact('giong' , 'chitieusaubenh'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiTieuSauBenh  $chiTieuSauBenh
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiTieuSauBenh $chitieusaubenh)
    {
        $giong = Giong::all();
        return view('admin.chitieusaubenhs.edit', ["title" => "Bảng chỉ tiêu sâu bệnh"], compact('giong' , 'chitieusaubenh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChiTieuSauBenh  $chiTieuSauBenh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiTieuSauBenh $chitieusaubenh)
    {
        $request->validate([
            'giong_id' => ['required'],
            'chitieusaubenh_chonloc' => ['max:255'],
            'chitieusaubenh_danhgia' => ['']

        ]);

        $chitieusaubenh->giong_id = $request->giong_id;
        $chitieusaubenh->chitieusaubenh_chonloc = $request->chitieusaubenh_chonloc;
        $chitieusaubenh->chitieusaubenh_danhgia = $request->chitieusaubenh_danhgia;

        $chitieusaubenh->save();

        return redirect()->route('chitieusaubenhs.index')
                        ->with('success','Chỉ tiêu sâu bệnh được tạo thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTieuSauBenh  $chiTieuSauBenh
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTieuSauBenh $chitieusaubenh)
    {
        $chitieusaubenh->delete();

        return redirect()->route('chitieusaubenhs.index')
                        ->with('success','Chỉ tiêu sâu bệnh được xoá thành công.');
    }
}
