<?php

namespace App\Http\Controllers;

use App\Models\GiaTriDoChiTiet;
use Illuminate\Http\Request;

class GiaTriDoChiTietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatridochitiets = GiaTriDoChiTiet::oldest()->paginate(10);

        return view('admin.giatridochitiets.index',compact('giatridochitiets'))->with('i', (request()->input('page', 1) - 1) * 10);
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
     * @param  \App\Models\GiaTriDoChiTiet  $giaTriDoChiTiet
     * @return \Illuminate\Http\Response
     */
    public function show(GiaTriDoChiTiet $giaTriDoChiTiet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GiaTriDoChiTiet  $giaTriDoChiTiet
     * @return \Illuminate\Http\Response
     */
    public function edit(GiaTriDoChiTiet $giaTriDoChiTiet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GiaTriDoChiTiet  $giaTriDoChiTiet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GiaTriDoChiTiet $giaTriDoChiTiet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GiaTriDoChiTiet  $giaTriDoChiTiet
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriDoChiTiet $giaTriDoChiTiet)
    {
        //
    }
}
