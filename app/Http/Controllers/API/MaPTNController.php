<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MaPTN as ResourcesMaPTN;
use App\Models\MaPTN;
use Illuminate\Http\Request;

class MaPTNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $maptn = MaPTN::all();
    //     $arr = [
    //     'status' => true,
    //     'message' => "Danh sách mã phòng thí nghiệm",
    //     'data'=>ResourcesMaPTN::collection($maptn)
    //     ];
    //     return response()->json($arr, 200);
    // }

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
    // public function show($id)
    // {
    //     $maptn = MaPTN::find($id);
    //     if(is_null($maptn)){
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Không có mã phòng thí nghiệm này',
    //             'data' => []
    //         ];
    //         return response()->json($arr, 200);
    //     }
    //     $arr = [
    //         'status' => true,
    //         'message' => 'Chi tiết mã phòng thí nghiệm',
    //         'data' => new ResourcesMaPTN($maptn)
    //     ];
    //     return response()->json($arr, 201);
    // }

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
