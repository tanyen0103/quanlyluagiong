<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\DacDiemTinhTrang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\DacDiemTinhTrang as ResourcesDacDiemTinhTrang;

class DacDiemTinhTrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $dacdiemtinhtrang = DacDiemTinhTrang::all();
    //     $arr = [
    //     'status' => true,
    //     'message' => "Danh sách đặc điểm tính trạng",
    //     'data'=>ResourcesDacDiemTinhTrang::collection($dacdiemtinhtrang)
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
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     $validator = Validator::make($input,[
    //         'doituongtinhtrang_id' => 'required',
    //         'dacdiemtt_ten' =>'required|max:255',
    //     ]);
    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }
    //     $dacdiemtinhtrang = new DacDiemTinhTrang();
    //     $dacdiemtinhtrang->dacdiemtt_ten = $request->dacdiemtt_ten;
    //     $dacdiemtinhtrang->doituongtinhtrang_id = $request->doituongtinhtrang_id;

    //     $dacdiemtinhtrang->save($input);
    //     $arr = [
    //         'status' => true,
    //         'message' => "Đặc điểm tính trạng đã lưu thành công",
    //         'data' => new ResourcesDacDiemTinhTrang($dacdiemtinhtrang)
    //     ];
    //     return response()->json($arr, 201);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {

    //     $dacdiemtinhtrang = DacDiemTinhTrang::find($id);
    //     if(is_null($dacdiemtinhtrang)){
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Không có đặc điểm tính trạng này',
    //             'data' => []
    //         ];
    //         return response()->json($arr, 200);
    //     }
    //     $arr = [
    //         'status' => true,
    //         'message' => 'Chi tiết đặc điểm tính trạng',
    //         'data' => new ResourcesDacDiemTinhTrang($dacdiemtinhtrang)
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
    // public function update(Request $request, DacDiemTinhTrang $dacdiemtinhtrang)
    // {
    //     $input = $request->all();
    //     $validator = Validator::make($input,[
    //         'doituongtinhtrang_id' => 'required',
    //         'dacdiemtt_ten' =>'required|max:255',
    //     ]);
    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }

    //     $dacdiemtinhtrang->dacdiemtt_ten = $request->dacdiemtt_ten;
    //     $dacdiemtinhtrang->doituongtinhtrang_id = $request->doituongtinhtrang_id;

    //     $dacdiemtinhtrang->save();
    //     $arr = [
    //         'status' => true,
    //         'message' => "Đặc điểm tính trạng đã lưu thành công",
    //         'data' => new ResourcesDacDiemTinhTrang($dacdiemtinhtrang)
    //     ];
    //     return response()->json($arr, 201);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(DacDiemTinhTrang $dacdiemtinhtrang)
    // {
    //     $dacdiemtinhtrang->delete();
    //     $arr = [
    //         'status' => true,
    //         'message' =>'Đặc điểm tính trạng đã được xoá',
    //         'data' => [],
    //     ];
    //     return response()->json($arr, 200);
    // }
}
