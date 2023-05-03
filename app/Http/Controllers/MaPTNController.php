<?php

namespace App\Http\Controllers;

use App\Models\Giong;
use App\Models\MaPTN;
use Illuminate\Http\Request;

class MaPTNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:maptn-list|maptn-create|maptn-edit|maptn-delete', ['only' => ['index','show']]);
         $this->middleware('permission:maptn-create', ['only' => ['create','store']]);
         $this->middleware('permission:maptn-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:maptn-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maptns = MaPTN::oldest()->paginate(100);

        return view('admin.maptns.index', ["title" => "Bảng mã phòng thí nghiệm"],
                    compact('maptns'))->with('i', (request()->input('page', 1) - 1) * 100);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giong = Giong::all();
        $maptn = MaPTN::all();
        return view('admin.maptns.create', ["title" => "Bảng mã phòng thí nghiệm"], compact('giong' , 'maptn'));
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
            'ptn_code' => ['required','unique:maptn','max:50'],
            'giong_id' => ['required','unique:maptn'],
            'ptn_mota' => ['']
        ]);

        $ptn = new MaPTN();
        $ptn->ptn_code = $request->ptn_code;
        $ptn->giong_id = $request->giong_id;
        $ptn->ptn_mota = $request->ptn_mota;

        $ptn->save();

        return redirect()->route('maptns.index')
                        ->with('success','Mã phòng thí nghiệm được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaPTN  $maPTN
     * @return \Illuminate\Http\Response
     */
    public function show(MaPTN $maptn)
    {
        $giong = Giong::all();
        return view('admin.maptns.show', ["title" => "Bảng mã phòng thí nghiệm"], compact('giong' , 'maptn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaPTN  $maPTN
     * @return \Illuminate\Http\Response
     */
    public function edit(MaPTN $maptn)
    {
        $giong = Giong::all();
        return view('admin.maptns.edit', ["title" => "Bảng mã phòng thí nghiệm"], compact('giong' , 'maptn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaPTN  $maPTN
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaPTN $maptn)
    {
        $request->validate([
            'ptn_code' => ['required','max:50'],
            'giong_id' => ['required'],
            'ptn_mota' => ['']
        ]);

        // $f = MaNgoaiDong::find($mangoaidong);
        $maptn->ptn_code = $request->ptn_code;
        $maptn->giong_id = $request->giong_id;
        $maptn->ptn_mota = $request->ptn_mota;
        $maptn->save();

        return redirect()->route('maptns.index')
                        ->with('success','Mã phòng thí nghiệm được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaPTN  $maPTN
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaPTN $maptn)
    {
        $maptn->delete();

        return redirect()->route('maptns.index')
                        ->with('success','Mã phòng thí nghiệm được xoá thành công.');

    }
}
