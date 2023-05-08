<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\DoiTuongTinhTrang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\DoiTuongTinhTrang as ResourcesDoiTuongTinhTrang;

class DoiTuongTinhTrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doituongtinhtrang = DoiTuongTinhTrang::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách đối tượng tính trạng",
        'data'=>ResourcesDoiTuongTinhTrang::collection($doituongtinhtrang)
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
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     $validator = Validator::make($input,[
    //         'giaidoantruongthanh_id' => 'required',
    //         'doituongtt_ten' =>'required|max:255',
    //         'doituongtt_mota' => ''
    //     ]);
    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }
    //     $doituongtinhtrang = new DoiTuongTinhTrang();
    //     $doituongtinhtrang->doituongtt_ten = $request->doituongtt_ten;
    //     $doituongtinhtrang->giaidoantruongthanh_id = $request->giaidoantruongthanh_id;
    //     $doituongtinhtrang->doituongtt_mota = $request->doituongtt_mota;

    //     $doituongtinhtrang->save($input);
    //     $arr = [
    //         'status' => true,
    //         'message' => "Đối tượng tính trạng đã lưu thành công",
    //         'data' => new ResourcesDoiTuongTinhTrang($doituongtinhtrang)
    //     ];
    //     return response()->json($arr, 201);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doituongtinhtrang = DoiTuongTinhTrang::find($id);
        if(is_null($doituongtinhtrang)){
            $arr = [
                'success' => false,
                'message' => 'Không có đối tượng tính trạng này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết đối tượng tính trạng',
            'data' => new ResourcesDoiTuongTinhTrang($doituongtinhtrang)
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
    // public function update(Request $request, DoiTuongTinhTrang $doituongtinhtrang)
    // {
    //     $input = $request->all();
    //     $validator = Validator::make($input,[
    //         'giaidoantruongthanh_id' => 'required',
    //         'doituongtt_ten' =>'required|max:255',
    //         'doituongtt_mota' => ''
    //     ]);
    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' =>false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }
    //     $doituongtinhtrang->doituongtt_ten = $input['doituongtt_ten'];
    //     $doituongtinhtrang->doituongtt_mota = $input['doituongtt_mota'];
    //     $doituongtinhtrang->save();
    //     $arr = [
    //         'status' => true,
    //         'message' => 'Đối tượng tính trạng đã cập nhật thành công',
    //         'data' => new ResourcesDoiTuongTinhTrang($doituongtinhtrang)
    //     ];
    //     return response() ->json($arr, 201);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(DoiTuongTinhTrang $doituongtinhtrang)
    // {
    //     $doituongtinhtrang->delete();
    //     $arr = [
    //         'status' => true,
    //         'message' =>'Đối tượng tính trạng đã được xoá',
    //         'data' => [],
    //     ];
    //     return response()->json($arr, 200);
    // }
}
