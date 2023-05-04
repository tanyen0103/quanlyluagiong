<?php

namespace App\Http\Controllers;
use App\Models\Giong;
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

        return view('dulieu', [
            'giongs' => $giongs
        ])->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
