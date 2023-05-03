<?php

namespace App\Http\Controllers;

use App\Exports\GiaTriDoNgoaiDongsExport;
use App\Models\LoaiGiaTriDo;
use Illuminate\Http\Request;
use App\Models\GiaTriTinhTrang;
use App\Models\ChiTieuNgoaiDong;
use App\Models\GiaTriDoNgoaiDong;
use Maatwebsite\Excel\Facades\Excel;

class GiaTriDoNgoaiDongController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        return Excel::download(new GiaTriDoNgoaiDongsExport, 'giatridongoaidongs-danhsach.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:giatridongoaidong-list|giatridongoaidong-create|giatridongoaidong-edit|giatridongoaidong-delete', ['only' => ['index','show']]);
         $this->middleware('permission:giatridongoaidong-create', ['only' => ['create','store']]);
         $this->middleware('permission:giatridongoaidong-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:giatridongoaidong-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatridongoaidongs = GiaTriDoNgoaiDong::with('chitieungoaidong')
        ->orderBy('chitieungoaidong_id', 'asc')
        ->paginate(100);

        return view('admin.giatridongoaidongs.index', ["title" => "Bảng giá trị đo ngoài đồng"],
                    compact('giatridongoaidongs'))->with('i', (request()->input('page', 1) - 1) * 100);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giatritinhtrangs = GiaTriTinhTrang::oldest()->paginate(5);
        $chitieungoaidong = ChiTieuNgoaiDong::all();
        $loaigiatrido = LoaiGiaTriDo::all();
        $giatridongoaidong = GiaTriDoNgoaiDong::all();
        return view('admin.giatridongoaidongs.create',
            compact('chitieungoaidong', 'loaigiatrido', 'giatridongoaidong','giatritinhtrangs'))
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
            'giatridongoaidong_giatri' => ['required','numeric'],
            'loaigiatrido_id' => ['required'],
            'chitieungoaidong_id' => ['required'],
        ]);


        $giatridongoaidong = new GiaTriDoNgoaiDong();
        $giatridongoaidong->giatridongoaidong_giatri = $request->giatridongoaidong_giatri;
        $giatridongoaidong->loaigiatrido_id = $request->loaigiatrido_id;
        $giatridongoaidong->chitieungoaidong_id = $request->chitieungoaidong_id;

        $giatridongoaidong->save();

        return redirect()->route('giatridongoaidongs.index')
                        ->with('success','Giá trị đo ngoài đồng được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GiaTriDoNgoaiDong  $giatridongoaidong
     * @return \Illuminate\Http\Response
     */
    public function show(GiaTriDoNgoaiDong $giatridongoaidong)
    {
        $chitieungoaidong = ChiTieuNgoaiDong::all();
        $loaigiatrido = LoaiGiaTriDo::all();
        return view('admin.giatridongoaidongs.show', ["title" => "Bảng giá trị đo ngoài đồng"], compact('chitieungoaidong', 'loaigiatrido', 'giatridongoaidong'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GiaTriDoNgoaiDong  $giatridongoaidong
     * @return \Illuminate\Http\Response
     */
    public function edit(GiaTriDoNgoaiDong $giatridongoaidong)
    {
        $giatritinhtrangs = GiaTriTinhTrang::oldest()->paginate(5);
        $chitieungoaidong = ChiTieuNgoaiDong::all();
        $loaigiatrido = LoaiGiaTriDo::all();
        return view('admin.giatridongoaidongs.edit', ["title" => "Bảng giá trị đo ngoài đồng"], compact('chitieungoaidong', 'loaigiatrido', 'giatridongoaidong','giatritinhtrangs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GiaTriDoNgoaiDong  $giatridongoaidong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GiaTriDoNgoaiDong $giatridongoaidong)
    {
        $request->validate([
            'giatridongoaidong_giatri' => ['required','numeric'],
            'loaigiatrido_id' => ['required'],
            'chitieungoaidong_id' => ['required'],
        ]);

        $giatridongoaidong->giatridongoaidong_giatri = $request->giatridongoaidong_giatri;
        $giatridongoaidong->loaigiatrido_id = $request->loaigiatrido_id;
        $giatridongoaidong->chitieungoaidong_id = $request->chitieungoaidong_id;

        $giatridongoaidong->save();

        return redirect()->route('giatridongoaidongs.index')
                        ->with('success','Giá trị đo ngoài đồng được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GiaTriDoNgoaiDong  $chitieungoaidongiaTriDoNgoaiDong
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriDoNgoaiDong $giatridongoaidong)
    {
        $giatridongoaidong -> delete();

        return redirect()->route('giatridongoaidongs.index')->with('success','Giá trị đo ngoài đồng xoá thành công');
    }
}
