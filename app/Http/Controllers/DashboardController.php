<?php

namespace App\Http\Controllers;

use App\Models\GiaTriTinhTrang;
use App\Models\Giong;
use App\Models\KieuHinh;
use App\Models\NhomGiong;
use App\Models\LoaiSauBenh;
use Illuminate\Http\Request;
// use App\Models\GiaTriDoNgoaiDong;
// use App\Models\GiaTriDoSauBenh;
// use App\Models\GiaTriDoTrongNha;

class DashboardController extends Controller
{
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

        $giatritinhtrangs = GiaTriTinhTrang::oldest()->paginate(5);
        // $giatridongoaidongs = GiaTriDoNgoaiDong::oldest()->paginate(10);
        // $giatridotrongnhas = GiaTriDoTrongNha::oldest()->paginate(10);
        // $giatridosaubenhs = GiaTriDoSauBenh::oldest()->paginate(10);
        return view('dashboard', [
            'totalNhomGiongs' => $totalNhomGiongs,
            'totalGiongs' => $totalGiongs,
            'totalKieuHinhs' => $totalKieuHinhs,
            'totalLoaiSauBenhs' => $totalLoaiSauBenhs,

            'giatritinhtrangs' => $giatritinhtrangs,
            // 'giatridongoaidongs'=> $giatridongoaidongs,
            // 'giatridotrongnhas'=> $giatridotrongnhas,
            // 'giatridosaubenhs'=> $giatridosaubenhs,
        ])
        ->with('i', (request()->input('page', 1) - 1) * 10);
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
