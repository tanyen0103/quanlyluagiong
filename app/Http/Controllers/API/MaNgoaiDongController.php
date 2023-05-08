<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MaNgoaiDong as ResourcesMaNgoaiDong;
use App\Models\MaNgoaiDong;
use Illuminate\Http\Request;

class MaNgoaiDongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangoaidong = MaNgoaiDong::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách mã ngoài đồng",
        'data'=>ResourcesMaNgoaiDong::collection($mangoaidong)
        ];
        return response()->json($arr, 200);
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
        $mangoaidong = MaNgoaiDong::find($id);
        if(is_null($mangoaidong)){
            $arr = [
                'success' => false,
                'message' => 'Không có  mã ngoài đồng này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết mã ngoài đồng',
            'data' => new ResourcesMaNgoaiDong($mangoaidong)
        ];
        return response()->json($arr, 201);
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
