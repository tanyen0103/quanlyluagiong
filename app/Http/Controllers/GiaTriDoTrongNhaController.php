<?php

namespace App\Http\Controllers;

use App\Models\LoaiGiaTriDo;
use Illuminate\Http\Request;
use App\Models\ChiTieuTrongNha;
use App\Models\GiaTriTinhTrang;
use App\Models\GiaTriDoTrongNha;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\GiaTriDoTrongNhasExport;

class GiaTriDoTrongNhaController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        return Excel::download(new GiaTriDoTrongNhasExport, 'giatridotrongnhas-danhsach.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:giatridotrongnha-list|giatridotrongnha-create|giatridotrongnha-edit|giatridotrongnha-delete', ['only' => ['index','show']]);
         $this->middleware('permission:giatridotrongnha-create', ['only' => ['create','store']]);
         $this->middleware('permission:giatridotrongnha-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:giatridotrongnha-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatridotrongnhas = GiaTriDoTrongNha::with('chitieutrongnha')
        ->orderBy('chitieutrongnha_id', 'asc')
        ->paginate(4);

        return view('admin.giatridotrongnhas.index', ["title" => "Bảng giá trị đo trong nhà"],
                    compact('giatridotrongnhas'))->with('i', (request()->input('page', 1) - 1) * 4);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giatritinhtrangs = GiaTriTinhTrang::oldest()->paginate(5);
        $chitieutrongnha = ChiTieuTrongNha::all();
        $loaigiatrido = LoaiGiaTriDo::all();
        $giatridotrongnha = GiaTriDoTrongNha::all();
        return view('admin.giatridotrongnhas.create', ["title" => "Bảng giá trị đo trong nhà"], compact('chitieutrongnha', 'loaigiatrido', 'giatridotrongnha','giatritinhtrangs'))
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
            'giatridotrongnha_giatri' => ['required','numeric'],
            'loaigiatrido_id' => ['required'],
            'chitieutrongnha_id' => ['required'],
        ]);


        $giatridotrongnha = new GiaTriDoTrongNha();
        $giatridotrongnha->giatridotrongnha_giatri = $request->giatridotrongnha_giatri;
        $giatridotrongnha->loaigiatrido_id = $request->loaigiatrido_id;
        $giatridotrongnha->chitieutrongnha_id = $request->chitieutrongnha_id;

        $giatridotrongnha->save();

        return redirect()->route('giatridotrongnhas.index')
                        ->with('success','Giá trị đo trong nhà được tạo thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GiaTriDoTrongNha  $giatridotrongnha
     * @return \Illuminate\Http\Response
     */
    public function show(GiaTriDoTrongNha $giatridotrongnha)
    {
        $chitieutrongnha = ChiTieuTrongNha::all();
        $loaigiatrido = LoaiGiaTriDo::all();
        return view('admin.giatridotrongnhas.show', ["title" => "Bảng giá trị đo ngoài đồng"], compact('chitieutrongnha', 'loaigiatrido', 'giatridotrongnha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GiaTriDoTrongNha  $giaTriDoTrongNha
     * @return \Illuminate\Http\Response
     */
    public function edit(GiaTriDoTrongNha $giatridotrongnha)
    {
        $giatritinhtrangs = GiaTriTinhTrang::oldest()->paginate(5);
        $chitieutrongnha = ChiTieuTrongNha::all();
        $loaigiatrido = LoaiGiaTriDo::all();
        return view('admin.giatridotrongnhas.edit', ["title" => "Bảng giá trị đo ngoài đồng"], compact('chitieutrongnha', 'loaigiatrido', 'giatridotrongnha','giatritinhtrangs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GiaTriDoTrongNha  $giaTriDoTrongNha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GiaTriDoTrongNha $giatridotrongnha)
    {
        $request->validate([
            'giatridotrongnha_giatri' => ['required','numeric'],
            'loaigiatrido_id' => ['required'],
            'chitieutrongnha_id' => ['required'],
        ]);


        $giatridotrongnha->giatridotrongnha_giatri = $request->giatridotrongnha_giatri;
        $giatridotrongnha->loaigiatrido_id = $request->loaigiatrido_id;
        $giatridotrongnha->chitieutrongnha_id = $request->chitieutrongnha_id;

        $giatridotrongnha->save();

        return redirect()->route('giatridotrongnhas.index')
                        ->with('success','Giá trị đo trong nhà được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GiaTriDoTrongNha  $giaTriDoTrongNha
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriDoTrongNha $giatridotrongnha)
    {
        $giatridotrongnha -> delete();

        return redirect()->route('giatridotrongnhas.index')->with('success','Giá trị đo trong nhà xoá thành công');
    }
}
