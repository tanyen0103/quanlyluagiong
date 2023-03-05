<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\GiaTriDoSauBenh;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GiaTriDoSauBenh as ResourcesGiaTriDoSauBenh;

class GiaTriDoSauBenhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatridosaubenh = GiaTriDoSauBenh::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách giá trị đo sâu bệnh",
        'data'=>ResourcesGiaTriDoSauBenh::collection($giatridosaubenh)
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
            'giatridosaubenh_giatri' => ['required','numeric'],
            'loaisaubenh_id' => ['required'],
            'chitieusaubenh_id' => ['required'],

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $giatridosaubenh = new GiaTriDoSauBenh();
        $giatridosaubenh->giatridosaubenh_giatri = $request->giatridosaubenh_giatri;
        $giatridosaubenh->loaisaubenh_id = $request->loaisaubenh_id;
        $giatridosaubenh->chitieusaubenh_id = $request->chitieusaubenh_id;

        $giatridosaubenh->save($input);
        $arr = [
            'status' => true,
            'message' => "Giá trị đo sâu bệnh đã lưu thành công",
            'data' => new ResourcesGiaTriDosaubenh($giatridosaubenh)
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
        $giatridosaubenh = GiaTriDoSauBenh::find($id);
        if(is_null($giatridosaubenh)){
            $arr = [
                'success' => false,
                'message' => 'Không có giá trị đo sâu bệnh này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết giá trị đo sâu bệnh',
            'data' => new ResourcesGiaTriDoSauBenh($giatridosaubenh)
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
    public function update(Request $request, GiaTriDoSauBenh $giatridosaubenh)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'giatridosaubenh_giatri' => ['required','numeric'],
            'loaisaubenh_id' => ['required'],
            'chitieusaubenh_id' => ['required'],

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $giatridosaubenh->giatridosaubenh_giatri = $request->giatridosaubenh_giatri;
        $giatridosaubenh->loaisaubenh_id = $request->loaisaubenh_id;
        $giatridosaubenh->chitieusaubenh_id = $request->chitieusaubenh_id;

        $giatridosaubenh->save();
        $arr = [
            'status' => true,
            'message' => "Giá trị đo sâu bệnh đã lưu thành công",
            'data' => new ResourcesGiaTriDosaubenh($giatridosaubenh)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriDoSauBenh $giatridosaubenh)
    {
        $giatridosaubenh->delete();
        $arr = [
            'status' => true,
            'message' =>'Giá trị đo sâu bệnh đã được xoá',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
