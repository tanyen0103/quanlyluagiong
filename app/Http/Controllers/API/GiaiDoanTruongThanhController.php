<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\GiaiDoanTruongThanh;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GiaiDoanTruongThanh as ResourcesGiaiDoanTruongThanh;

class GiaiDoanTruongThanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $giaidoantruongthanh = GiaiDoanTruongThanh::all();
    //     $arr = [
    //     'status' => true,
    //     'message' => "Danh sách giai đoạn trưởng thành",
    //     'data'=>ResourcesGiaiDoanTruongThanh::collection($giaidoantruongthanh)
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
    //         'giaidoantt_ten' =>'required|max:255',
    //         'giaidoantt_mota' => ''
    //     ]);
    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }
    //     $giaidoantruongthanh = GiaiDoanTruongThanh::create($input);
    //     $arr = [
    //         'status' => true,
    //         'message' => "Giai đoạn trưởng thành đã lưu thành công",
    //         'data' => new ResourcesGiaiDoanTruongThanh($giaidoantruongthanh)
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
    //     $giaidoantruongthanh = GiaiDoanTruongThanh::find($id);
    //     if(is_null($giaidoantruongthanh)){
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Không có giai đoạn trưởng thành này',
    //             'data' => []
    //         ];
    //         return response()->json($arr, 200);
    //     }
    //     $arr = [
    //         'status' => true,
    //         'message' => 'Chi tiết giai đoạn trưởng thành',
    //         'data' => new ResourcesGiaiDoanTruongThanh($giaidoantruongthanh)
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
    // public function update(Request $request, GiaiDoanTruongThanh $giaidoantruongthanh)
    // {
    //     $input = $request->all();
    //     $validator = Validator::make($input,[
    //         'giaidoantt_ten' =>'required|max:255',
    //         'giaidoantt_mota' => ''
    //     ]);
    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' =>false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }
    //     $giaidoantruongthanh->giaidoantt_ten = $input['giaidoantt_ten'];
    //     $giaidoantruongthanh->giaidoantt_mota = $input['giaidoantt_mota'];
    //     $giaidoantruongthanh->save();
    //     $arr = [
    //         'status' => true,
    //         'message' => 'Giai đoạn trưởng thành đã cập nhật thành công',
    //         'data' => new ResourcesGiaiDoanTruongThanh($giaidoantruongthanh)
    //     ];
    //     return response() ->json($arr, 201);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(GiaiDoanTruongThanh $giaidoantruongthanh)
    // {
    //     $giaidoantruongthanh->delete();
    //     $arr = [
    //         'status' => true,
    //         'message' =>'Giai đoạn trưởng thành đã được xoá',
    //         'data' => [],
    //     ];
    //     return response()->json($arr, 200);
    // }
}
