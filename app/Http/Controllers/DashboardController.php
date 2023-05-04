<?php

namespace App\Http\Controllers;

use App\Models\Giong;
use App\Models\KieuHinh;
use App\Models\NhomGiong;
use App\Models\LoaiSauBenh;
use Illuminate\Http\Request;
use App\Exports\ThongKesExport;
use App\Models\ChiTieuSauBenh;
use App\Models\ChiTieuTrongNha;
use App\Models\ChiTieuNgoaiDong;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{


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
        $totalLoaiSauBenhs = LoaiSauBenh::count();
        $totalChiTieuSauBenhs = ChiTieuSauBenh::count();
        $totalChiTieuNgoaiDongs = ChiTieuNgoaiDong::count();
        $totalChiTieuTrongNhas = ChiTieuTrongNha::count();

        $giongs = Giong::with('nhomgiong')
        ->orderBy('nhomgiong_id', 'asc')
        ->paginate(100);

        // Create an array of labels with the new values
        $labels = [
            "Nhom Giongs ($totalNhomGiongs)",
            "Giongs ($totalGiongs)",
            "Loai Sau Benhs ($totalLoaiSauBenhs)",
            "Gia Tri Do Sau Benhs ($totalChiTieuSauBenhs)",
            "Gia Tri Do Ngoai Dongs ($totalChiTieuNgoaiDongs)",
            "Gia Tri Do Trong Nhas ($totalChiTieuTrongNhas)"
        ];
        return view('dashboard', [
            'totalNhomGiongs' => $totalNhomGiongs,
            'totalGiongs' => $totalGiongs,
            'totalLoaiSauBenhs' => $totalLoaiSauBenhs,
            'totalChiTieuSauBenhs' => $totalChiTieuSauBenhs,
            'totalChiTieuNgoaiDongs' => $totalChiTieuNgoaiDongs,
            'totalChiTieuTrongNhas' => $totalChiTieuTrongNhas,

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
