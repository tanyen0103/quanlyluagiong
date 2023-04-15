<?php

namespace App\Http\Controllers;

use App\Models\Giong;
use Illuminate\Http\Request;
use App\Models\ChiTieuTrongNha;
use App\Models\GiaTriTinhTrang;

class ChiTieuTrongNhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:chitieutrongnha-list|chitieutrongnha-create|chitieutrongnha-edit|chitieutrongnha-delete', ['only' => ['index','show']]);
         $this->middleware('permission:chitieutrongnha-create', ['only' => ['create','store']]);
         $this->middleware('permission:chitieutrongnha-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:chitieutrongnha-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitieutrongnhas = ChiTieuTrongNha::with('giong')
        ->orderBy('giong_id', 'asc')
        ->paginate(4);

        return view('admin.chitieutrongnhas.index', ["title" => "Bảng chỉ tiêu trong nhà"],
                    compact('chitieutrongnhas'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giatritinhtrangs = GiaTriTinhTrang::oldest()->paginate(5);
        $giong = Giong::all();
        $chitieutrongnha = ChiTieuTrongNha::all();
        return view('admin.chitieutrongnhas.create', compact('giong' , 'chitieutrongnha','giatritinhtrangs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
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
            'giong_id' => ['required', 'unique:chitieutrongnha,giong_id'],
            'chitieutrongnha_giec2' => ['max:255'],
            'chitieutrongnha_dorunghat' => ['max:255'],
            'chitieutrongnha_msvotrau' => ['max:255'],
            'chitieutrongnha_dangthoc' => ['max:255'],
            'chitieutrongnha_mausacgao' => ['max:255'],
            'chitieutrongnha_tl1000hat' => ['max:255'],
            'chitieutrongnha_doam' => ['max:255'],
            'chitieutrongnha_thom' => ['max:255'],
            'chitieutrongnha_danhgia' => ['']

        ]);

        $chitieutrongnha = new ChiTieuTrongNha();
        $chitieutrongnha->giong_id = $request->giong_id;
        $chitieutrongnha->chitieutrongnha_giec2 = $request->chitieutrongnha_giec2;
        $chitieutrongnha->chitieutrongnha_dorunghat = $request->chitieutrongnha_dorunghat;
        $chitieutrongnha->chitieutrongnha_msvotrau = $request->chitieutrongnha_msvotrau;
        $chitieutrongnha->chitieutrongnha_dangthoc = $request->chitieutrongnha_dangthoc;
        $chitieutrongnha->chitieutrongnha_mausacgao = $request->chitieutrongnha_mausacgao;
        $chitieutrongnha->chitieutrongnha_tl1000hat = $request->chitieutrongnha_tl1000hat;
        $chitieutrongnha->chitieutrongnha_doam = $request->chitieutrongnha_doam;
        $chitieutrongnha->chitieutrongnha_thom = $request->chitieutrongnha_thom;
        $chitieutrongnha->chitieutrongnha_danhgia = $request->chitieutrongnha_danhgia;

        $chitieutrongnha->save();

        return redirect()->route('chitieutrongnhas.index')
                        ->with('success','Chỉ tiêu trong nhà được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiTieuTrongNha  $chitieutrongnha
     * @return \Illuminate\Http\Response
     */
    public function show(ChiTieuTrongNha $chitieutrongnha)
    {
        $giong = Giong::all();
        return view('admin.chitieutrongnhas.show', ["title" => "Bảng mã chỉ tiêu trong nhà"], compact('giong' , 'chitieutrongnha'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiTieuTrongNha  $chitieutrongnha
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiTieuTrongNha $chitieutrongnha)
    {
        $giatritinhtrangs = GiaTriTinhTrang::oldest()->paginate(5);
        $giong = Giong::all();
        return view('admin.chitieutrongnhas.edit', ["title" => "Bảng mã chỉ tiêu trong nhà"], compact('giong' , 'chitieutrongnha','giatritinhtrangs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChiTieuTrongNha  $chitieutrongnha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiTieuTrongNha $chitieutrongnha)
    {
        $request->validate([
            'giong_id' => ['required'],
            'chitieutrongnha_giec2' => ['max:255'],
            'chitieutrongnha_dorunghat' => ['max:255'],
            'chitieutrongnha_msvotrau' => ['max:255'],
            'chitieutrongnha_dangthoc' => ['max:255'],
            'chitieutrongnha_mausacgao' => ['max:255'],
            'chitieutrongnha_tl1000hat' => ['max:255'],
            'chitieutrongnha_doam' => ['max:255'],
            'chitieutrongnha_thom' => ['max:255'],
            'chitieutrongnha_danhgia' => ['']

        ]);

        $chitieutrongnha->giong_id = $request->giong_id;
        $chitieutrongnha->chitieutrongnha_giec2 = $request->chitieutrongnha_giec2;
        $chitieutrongnha->chitieutrongnha_dorunghat = $request->chitieutrongnha_dorunghat;
        $chitieutrongnha->chitieutrongnha_msvotrau = $request->chitieutrongnha_msvotrau;
        $chitieutrongnha->chitieutrongnha_dangthoc = $request->chitieutrongnha_dangthoc;
        $chitieutrongnha->chitieutrongnha_mausacgao = $request->chitieutrongnha_mausacgao;
        $chitieutrongnha->chitieutrongnha_tl1000hat = $request->chitieutrongnha_tl1000hat;
        $chitieutrongnha->chitieutrongnha_doam = $request->chitieutrongnha_doam;
        $chitieutrongnha->chitieutrongnha_thom = $request->chitieutrongnha_thom;
        $chitieutrongnha->chitieutrongnha_danhgia = $request->chitieutrongnha_danhgia;

        $chitieutrongnha->save();

        return redirect()->route('chitieutrongnhas.index')
                        ->with('success','Chỉ tiêu trong nhà được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTieuTrongNha  $chitieutrongnha
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTieuTrongNha $chitieutrongnha)
    {
        $chitieutrongnha->delete();

        return redirect()->route('chitieutrongnhas.index')
                        ->with('success','Chỉ tiêu trong nhà được xoá thành công.');
    }
}
