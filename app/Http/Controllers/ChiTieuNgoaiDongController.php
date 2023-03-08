<?php

namespace App\Http\Controllers;

use App\Models\Giong;
use Illuminate\Http\Request;
use App\Models\ChiTieuNgoaiDong;

class ChiTieuNgoaiDongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:chitieungoaidong-list|chitieungoaidong-create|chitieungoaidong-edit|chitieungoaidong-delete', ['only' => ['index','show']]);
         $this->middleware('permission:chitieungoaidong-create', ['only' => ['create','store']]);
         $this->middleware('permission:chitieungoaidong-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:chitieungoaidong-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitieungoaidongs = ChiTieuNgoaiDong::oldest()->paginate(10);

        return view('admin.chitieungoaidongs.index', ["title" => "Bảng chỉ tiêu ngoài đồng"],
                    compact('chitieungoaidongs'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giong = Giong::all();
        $chitieungoaidong = ChiTieuNgoaiDong::all();
        return view('admin.chitieungoaidongs.create', ["title" => "Bảng chỉ tiêu ngoài đồng"], compact('giong' , 'chitieungoaidong'));
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
            'giong_id' => ['required'],
            'chitieungoaidong_phienla' => ['max:255'],
            'chitieungoaidong_taila' => ['max:255'],
            'chitieungoaidong_gocnhanh' => ['max:255'],
            'chitieungoaidong_bela' => ['max:255'],
            'chitieungoaidong_gocla' => ['max:255'],
            'chitieungoaidong_msgocla' => ['max:255'],
            'chitieungoaidong_gocladong' => ['max:255'],
            'chitieungoaidong_thoatcb' => ['max:255'],
            'chitieungoaidong_msgocthan' => ['max:255'],
            'chitieungoaidong_dangbong' => ['max:255'],
            'chitieungoaidong_congtrucbong' => ['max:255'],
            'chitieungoaidong_rau' => ['max:255'],


        ]);

        $chitieungoaidong = new ChiTieuNgoaiDong();
        $chitieungoaidong->giong_id = $request->giong_id;
        $chitieungoaidong->chitieungoaidong_phienla = $request->chitieungoaidong_phienla;
        $chitieungoaidong->chitieungoaidong_taila = $request->chitieungoaidong_taila;
        $chitieungoaidong->chitieungoaidong_gocnhanh = $request->chitieungoaidong_gocnhanh;
        $chitieungoaidong->chitieungoaidong_bela = $request->chitieungoaidong_bela;
        $chitieungoaidong->chitieungoaidong_gocla = $request->chitieungoaidong_gocla;
        $chitieungoaidong->chitieungoaidong_msgocla = $request->chitieungoaidong_msgocla;
        $chitieungoaidong->chitieungoaidong_gocladong = $request->chitieungoaidong_gocladong;
        $chitieungoaidong->chitieungoaidong_thoatcb = $request->chitieungoaidong_thoatcb;
        $chitieungoaidong->chitieungoaidong_msgocthan = $request->chitieungoaidong_msgocthan;
        $chitieungoaidong->chitieungoaidong_dangbong = $request->chitieungoaidong_dangbong;
        $chitieungoaidong->chitieungoaidong_congtrucbong = $request->chitieungoaidong_congtrucbong;
        $chitieungoaidong->chitieungoaidong_rau = $request->chitieungoaidong_rau;

        $chitieungoaidong->save();

        return redirect()->route('chitieungoaidongs.index')
                        ->with('success','Chỉ tiêu ngoài đồng được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiTieuNgoaiDong  $chitieungoaidong
     * @return \Illuminate\Http\Response
     */
    public function show(ChiTieuNgoaiDong $chitieungoaidong)
    {
        $giong = Giong::all();
        return view('admin.chitieungoaidongs.show', ["title" => "Bảng chỉ tiêu ngoài đồng"], compact('giong' , 'chitieungoaidong'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiTieuNgoaiDong  $chitieungoaidong
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiTieuNgoaiDong $chitieungoaidong)
    {
        $giong = Giong::all();
        return view('admin.chitieungoaidongs.edit', ["title" => "Bảng chỉ tiêu ngoài đồng"], compact('giong' , 'chitieungoaidong'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChiTieuNgoaiDong  $chitieungoaidong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiTieuNgoaiDong $chitieungoaidong)
    {
        $request->validate([
            'giong_id' => ['required'],
            'chitieungoaidong_phienla' => ['max:255'],
            'chitieungoaidong_taila' => ['max:255'],
            'chitieungoaidong_gocnhanh' => ['max:255'],
            'chitieungoaidong_bela' => ['max:255'],
            'chitieungoaidong_gocla' => ['max:255'],
            'chitieungoaidong_msgocla' => ['max:255'],
            'chitieungoaidong_gocladong' => ['max:255'],
            'chitieungoaidong_thoatcb' => ['max:255'],
            'chitieungoaidong_msgocthan' => ['max:255'],
            'chitieungoaidong_dangbong' => ['max:255'],
            'chitieungoaidong_congtrucbong' => ['max:255'],
            'chitieungoaidong_rau' => ['max:255'],


        ]);

        $chitieungoaidong->giong_id = $request->giong_id;
        $chitieungoaidong->chitieungoaidong_phienla = $request->chitieungoaidong_phienla;
        $chitieungoaidong->chitieungoaidong_taila = $request->chitieungoaidong_taila;
        $chitieungoaidong->chitieungoaidong_gocnhanh = $request->chitieungoaidong_gocnhanh;
        $chitieungoaidong->chitieungoaidong_bela = $request->chitieungoaidong_bela;
        $chitieungoaidong->chitieungoaidong_gocla = $request->chitieungoaidong_gocla;
        $chitieungoaidong->chitieungoaidong_msgocla = $request->chitieungoaidong_msgocla;
        $chitieungoaidong->chitieungoaidong_gocladong = $request->chitieungoaidong_gocladong;
        $chitieungoaidong->chitieungoaidong_thoatcb = $request->chitieungoaidong_thoatcb;
        $chitieungoaidong->chitieungoaidong_msgocthan = $request->chitieungoaidong_msgocthan;
        $chitieungoaidong->chitieungoaidong_dangbong = $request->chitieungoaidong_dangbong;
        $chitieungoaidong->chitieungoaidong_congtrucbong = $request->chitieungoaidong_congtrucbong;
        $chitieungoaidong->chitieungoaidong_rau = $request->chitieungoaidong_rau;

        $chitieungoaidong->save();

        return redirect()->route('chitieungoaidongs.index')
                        ->with('success','Chỉ tiêu ngoài đồng được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTieuNgoaiDong  $chiTieuNgoaiDong
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTieuNgoaiDong $chitieungoaidong)
    {
        $chitieungoaidong->delete();

        return redirect()->route('chitieungoaidongs.index')
                        ->with('success','Chỉ tiêu ngoài đồng được xoá thành công.');
    }
}
