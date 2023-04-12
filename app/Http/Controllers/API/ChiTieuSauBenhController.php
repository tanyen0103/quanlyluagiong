<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\ChiTieuSauBenh;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ChiTieuSauBenh as ResourcesChiTieuSauBenh;

class ChiTieuSauBenhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitieusaubenh = ChiTieuSauBenh::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách chỉ tiêu sâu bệnh",
        'data'=>ResourcesChiTieuSauBenh::collection($chitieusaubenh)
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
            'giong_id' => ['required', 'unique:chitieusaubenh,giong_id'],
            'chitieusaubenh_chonloc' => ['max:255'],
            'chitieusaubenh_danhgia' => [''],

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $chitieusaubenh = new ChiTieuSauBenh();
        $chitieusaubenh->giong_id = $request->giong_id;
        $chitieusaubenh->chitieusaubenh_chonloc = $request->chitieusaubenh_chonloc;
        $chitieusaubenh->chitieusaubenh_danhgia = $request->chitieusaubenh_danhgia;

        $chitieusaubenh->save($input);
        $arr = [
            'status' => true,
            'message' => "chỉ tiêu ngoài đồng đã lưu thành công",
            'data' => new ResourcesChiTieuSauBenh($chitieusaubenh)
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
        $chitieusaubenh = ChiTieuSauBenh::find($id);
        if(is_null($chitieusaubenh)){
            $arr = [
                'success' => false,
                'message' => 'Không có chỉ tiêu sâu bệnh này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết chỉ tiêu sâu bệnh',
            'data' => new ResourcesChiTieuSauBenh($chitieusaubenh)
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiTieuSauBenh $chitieusaubenh)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'giong_id' => ['required'],
            'chitieusaubenh_chonloc' => ['max:255'],
            'chitieusaubenh_danhgia' => [''],

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $chitieusaubenh->giong_id = $request->giong_id;
        $chitieusaubenh->chitieusaubenh_chonloc = $request->chitieusaubenh_chonloc;
        $chitieusaubenh->chitieusaubenh_danhgia = $request->chitieusaubenh_taila;

        $chitieusaubenh->save();
        $arr = [
            'status' => true,
            'message' => "chỉ tiêu sâu bệnh đã cập nhật thành công",
            'data' => new ResourcesChiTieuSauBenh($chitieusaubenh)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTieuSauBenh $chitieusaubenh)
    {
        $chitieusaubenh->delete();
        $arr = [
            'status' => true,
            'message' =>'Chỉ tiêu sâu bệnh đã được xoá',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
