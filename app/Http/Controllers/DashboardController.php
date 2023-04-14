<?php

namespace App\Http\Controllers;

use App\Models\Giong;
use App\Models\KieuHinh;
use App\Models\NhomGiong;
use App\Models\LoaiSauBenh;
use Illuminate\Http\Request;
use App\Exports\ThongKesExport;
use App\Models\GiaTriDoSauBenh;
use App\Models\GiaTriDoTrongNha;
use App\Exports\DashBoardsExport;
use App\Models\GiaTriDoNgoaiDong;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport()
    {
        return Excel::download(new DashBoardsExport, 'giongs-danhsach.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExportThongKe()
    {
        return Excel::download(new ThongKesExport, 'thongketongs.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalNhomGiongs = NhomGiong::count();
        $totalGiongs = Giong::count();
        $totalKieuHinhs = KieuHinh::count();
        $totalLoaiSauBenhs = LoaiSauBenh::count();
        $totalGiaTriDoSauBenhs = GiaTriDoSauBenh::count();
        $totalGiaTriDoNgoaiDongs = GiaTriDoNgoaiDong::count();
        $totalGiaTriDoTrongNhas = GiaTriDoTrongNha::count();

        $giongs = Giong::with('nhomgiong')
        ->orderBy('nhomgiong_id', 'asc')
        ->paginate(4);

        // Create an array of labels with the new values
        $labels = [
            "Nhom Giongs ($totalNhomGiongs)",
            "Giongs ($totalGiongs)",
            "Kieu Hinhs ($totalKieuHinhs)",
            "Loai Sau Benhs ($totalLoaiSauBenhs)",
            "Gia Tri Do Sau Benhs ($totalGiaTriDoSauBenhs)",
            "Gia Tri Do Ngoai Dongs ($totalGiaTriDoNgoaiDongs)",
            "Gia Tri Do Trong Nhas ($totalGiaTriDoTrongNhas)"
        ];
        return view('dashboard', [
            'totalNhomGiongs' => $totalNhomGiongs,
            'totalGiongs' => $totalGiongs,
            'totalKieuHinhs' => $totalKieuHinhs,
            'totalLoaiSauBenhs' => $totalLoaiSauBenhs,
            'totalGiaTriDoSauBenhs' => $totalGiaTriDoSauBenhs,
            'totalGiaTriDoNgoaiDongs' => $totalGiaTriDoNgoaiDongs,
            'totalGiaTriDoTrongNhas' => $totalGiaTriDoTrongNhas,

            'giongs' => $giongs
        ])->with('i', (request()->input('page', 1) - 1) * 100);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
