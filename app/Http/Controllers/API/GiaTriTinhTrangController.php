<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\GiaTriTinhTrang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GiaTriTinhTrang as ResourcesGiaTriTinhTrang;

class GiaTriTinhTrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatritinhtrang = GiaTriTinhTrang::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách giá trị tính trạng",
        'data'=>ResourcesGiaTriTinhTrang::collection($giatritinhtrang)
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
        $input = $request->all();
        $validator = Validator::make($input,[
            'dacdiemtinhtrang_id' => 'required',
            'giatritt_diem' =>'required|max:10',
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $giatritinhtrang = new GiaTriTinhTrang();
        $giatritinhtrang->giatritt_diem = $request->giatritt_diem;
        $giatritinhtrang->dacdiemtinhtrang_id = $request->dacdiemtinhtrang_id;

        $giatritinhtrang->save($input);
        $arr = [
            'status' => true,
            'message' => "Giá trị tính trạng đã lưu thành công",
            'data' => new ResourcesGiaTriTinhTrang($giatritinhtrang)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $giatritinhtrang = GiaTriTinhTrang::find($id);
        if(is_null($giatritinhtrang)){
            $arr = [
                'success' => false,
                'message' => 'Không có giá trị tính trạng này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết giá trị tính trạng',
            'data' => new ResourcesGiaTriTinhTrang($giatritinhtrang)
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
    public function update(Request $request, GiaTriTinhTrang $giatritinhtrang)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'dacdiemtinhtrang_id' => 'required',
            'giatritt_diem' =>'required|max:10',
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $giatritinhtrang->giatritt_diem = $request->giatritt_diem;
        $giatritinhtrang->dacdiemtinhtrang_id = $request->dacdiemtinhtrang_id;

        $giatritinhtrang->save();
        $arr = [
            'status' => true,
            'message' => "Giá trị tính trạng đã cập nhật thành công",
            'data' => new ResourcesGiaTriTinhTrang($giatritinhtrang)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriTinhTrang $giatritinhtrang)
    {
        $giatritinhtrang->delete();
        $arr = [
            'status' => true,
            'message' =>'Giá trị tính trạng đã được xoá',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
