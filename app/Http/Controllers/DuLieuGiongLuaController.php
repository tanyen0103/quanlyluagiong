<?php

namespace App\Http\Controllers;
use App\Models\Giong;
use App\Models\LoaiSauBenh;
use App\Models\LoaiGiaTriDo;

use Illuminate\Http\Request;
use App\Exports\ThongKesExport;
use App\Exports\DashBoardsExport;
use Maatwebsite\Excel\Facades\Excel;

class DuLieuGiongLuaController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        return Excel::download(new DashBoardsExport, 'giongs-danhsach.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giongs = Giong::with('nhomgiong')
        ->orderBy('nhomgiong_id', 'asc')
        ->paginate(10);
        $loaisaubenhs = LoaiSauBenh::all();
        $loaigiatridos_tn = LoaiGiaTriDo::where('phanloai', 2)->get();
        $loaigiatridos_nd = LoaiGiaTriDo::where('phanloai', 1)->get();

        return view('dulieu', [
            'giongs' => $giongs,
            'loaisaubenhs' => $loaisaubenhs,
            'loaigiatridos_tn' => $loaigiatridos_tn,
            'loaigiatridos_nd' => $loaigiatridos_nd
        ])->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
