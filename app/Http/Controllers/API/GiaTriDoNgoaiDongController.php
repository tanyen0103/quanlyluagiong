<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\GiaTriDoNgoaiDong;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GiaTriDoNgoaiDong as ResourcesGiaTriDoNgoaiDong;

class GiaTriDoNgoaiDongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatridongoaidong = GiaTriDoNgoaiDong::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách giá trị đo ngoài đồng",
        'data'=>ResourcesGiaTriDoNgoaiDong::collection($giatridongoaidong)
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
            'giatridongoaidong_giatri' => ['required','numeric'],
            'loaigiatrido_id' => ['required'],
            'chitieungoaidong_id' => ['required'],

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $giatridongoaidong = new GiaTriDoNgoaiDong();
        $giatridongoaidong->giatridongoaidong_giatri = $request->giatridongoaidong_giatri;
        $giatridongoaidong->loaigiatrido_id = $request->loaigiatrido_id;
        $giatridongoaidong->chitieungoaidong_id = $request->chitieungoaidong_id;

        $giatridongoaidong->save($input);
        $arr = [
            'status' => true,
            'message' => "Giá trị đo ngoài đồng đã lưu thành công",
            'data' => new ResourcesGiaTriDoNgoaiDong($giatridongoaidong)
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
        $giatridongoaidong = GiaTriDoNgoaiDong::find($id);
        if(is_null($giatridongoaidong)){
            $arr = [
                'success' => false,
                'message' => 'Không có giá trị đo ngoài đồng này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết giá trị đo ngoài đồng',
            'data' => new ResourcesGiaTriDoNgoaiDong($giatridongoaidong)
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
    public function update(Request $request, GiaTriDoNgoaiDong  $giatridongoaidong)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'giatridongoaidong_giatri' => ['required','numeric'],
            'loaigiatrido_id' => ['required'],
            'chitieungoaidong_id' => ['required'],

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $giatridongoaidong->giatridongoaidong_giatri = $request->giatridongoaidong_giatri;
        $giatridongoaidong->loaigiatrido_id = $request->loaigiatrido_id;
        $giatridongoaidong->chitieungoaidong_id = $request->chitieungoaidong_id;

        $giatridongoaidong->save();
        $arr = [
            'status' => true,
            'message' => "Giá trị đo ngoài đồng đã cập nhật thành công",
            'data' => new ResourcesGiaTriDoNgoaiDong($giatridongoaidong)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriDoNgoaiDong  $giatridongoaidong)
    {
        $giatridongoaidong->delete();
        $arr = [
            'status' => true,
            'message' =>'Giá trị đo ngoài đồng đã được xoá',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
