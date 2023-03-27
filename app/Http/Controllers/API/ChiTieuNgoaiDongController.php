<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\ChiTieuNgoaiDong;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ChiTieuNgoaiDong as ResourcesChiTieuNgoaiDong;

class ChiTieuNgoaiDongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitieungoaidong = ChiTieuNgoaiDong::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách chỉ tiêu ngoài đồng",
        'data'=>ResourcesChiTieuNgoaiDong::collection($chitieungoaidong)
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
            'giong_id' => ['required'],
            'chitieungoaidong_phienla' => ['max:255'],
            'chitieungoaidong_taila' => ['max:255'],
            'chitieungoaidong_gocnhanh' => ['max:255'],
            'chitieungoaidong_bela' => ['max:255'],
            'chitieungoaidong_gocla' => ['max:255'],
            'chitieungoaidong_msgocla' => ['max:255'],
            'chitieungoaidong_gocladong' => ['max:255'],
            'chitieungoaidong_thoatcb' => ['max:255'],
            'chitieungoaidong_msgocthan' => ['max:255'],
            'chitieungoaidong_dangbong' => ['max:255'],
            'chitieungoaidong_congtrucbong' => ['max:255'],
            'chitieungoaidong_rau' => ['max:255'],
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $chitieungoaidong = new ChiTieuNgoaiDong();
        $chitieungoaidong->giong_id = $request->giong_id;
        $chitieungoaidong->chitieungoaidong_phienla = $request->chitieungoaidong_phienla;
        $chitieungoaidong->chitieungoaidong_taila = $request->chitieungoaidong_taila;
        $chitieungoaidong->chitieungoaidong_gocnhanh = $request->chitieungoaidong_gocnhanh;
        $chitieungoaidong->chitieungoaidong_bela = $request->chitieungoaidong_bela;
        $chitieungoaidong->chitieungoaidong_gocla = $request->chitieungoaidong_gocla;
        $chitieungoaidong->chitieungoaidong_msgocla = $request->chitieungoaidong_msgocla;
        $chitieungoaidong->chitieungoaidong_gocladong = $request->chitieungoaidong_gocladong;
        $chitieungoaidong->chitieungoaidong_thoatcb = $request->chitieungoaidong_thoatcb;
        $chitieungoaidong->chitieungoaidong_msgocthan = $request->chitieungoaidong_msgocthan;
        $chitieungoaidong->chitieungoaidong_dangbong = $request->chitieungoaidong_dangbong;
        $chitieungoaidong->chitieungoaidong_congtrucbong = $request->chitieungoaidong_congtrucbong;
        $chitieungoaidong->chitieungoaidong_rau = $request->chitieungoaidong_rau;

        $chitieungoaidong->save($input);
        $arr = [
            'status' => true,
            'message' => "chỉ tiêu ngoài đồng đã lưu thành công",
            'data' => new ResourcesChiTieuNgoaiDong($chitieungoaidong)
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
        $chitieungoaidong = ChiTieuNgoaiDong::find($id);
        if(is_null($chitieungoaidong)){
            $arr = [
                'success' => false,
                'message' => 'Không có chỉ tiêu ngoài đồng này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết chỉ tiêu ngoài đồng',
            'data' => new ResourcesChiTieuNgoaiDong($chitieungoaidong)
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
    public function update(Request $request, ChiTieuNgoaiDong $chitieungoaidong)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'giong_id' => ['required'],
            'chitieungoaidong_phienla' => ['max:255'],
            'chitieungoaidong_taila' => ['max:255'],
            'chitieungoaidong_gocnhanh' => ['max:255'],
            'chitieungoaidong_bela' => ['max:255'],
            'chitieungoaidong_gocla' => ['max:255'],
            'chitieungoaidong_msgocla' => ['max:255'],
            'chitieungoaidong_gocladong' => ['max:255'],
            'chitieungoaidong_thoatcb' => ['max:255'],
            'chitieungoaidong_msgocthan' => ['max:255'],
            'chitieungoaidong_dangbong' => ['max:255'],
            'chitieungoaidong_congtrucbong' => ['max:255'],
            'chitieungoaidong_rau' => ['max:255'],
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $chitieungoaidong->giong_id = $request->giong_id;
        $chitieungoaidong->chitieungoaidong_phienla = $request->chitieungoaidong_phienla;
        $chitieungoaidong->chitieungoaidong_taila = $request->chitieungoaidong_taila;
        $chitieungoaidong->chitieungoaidong_gocnhanh = $request->chitieungoaidong_gocnhanh;
        $chitieungoaidong->chitieungoaidong_bela = $request->chitieungoaidong_bela;
        $chitieungoaidong->chitieungoaidong_gocla = $request->chitieungoaidong_gocla;
        $chitieungoaidong->chitieungoaidong_msgocla = $request->chitieungoaidong_msgocla;
        $chitieungoaidong->chitieungoaidong_gocladong = $request->chitieungoaidong_gocladong;
        $chitieungoaidong->chitieungoaidong_thoatcb = $request->chitieungoaidong_thoatcb;
        $chitieungoaidong->chitieungoaidong_msgocthan = $request->chitieungoaidong_msgocthan;
        $chitieungoaidong->chitieungoaidong_dangbong = $request->chitieungoaidong_dangbong;
        $chitieungoaidong->chitieungoaidong_congtrucbong = $request->chitieungoaidong_congtrucbong;
        $chitieungoaidong->chitieungoaidong_rau = $request->chitieungoaidong_rau;

        $chitieungoaidong->save();
        $arr = [
            'status' => true,
            'message' => "chỉ tiêu ngoài đồng đã cập nhật thành công",
            'data' => new ResourcesChiTieuNgoaiDong($chitieungoaidong)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTieuNgoaiDong $chitieungoaidong)
    {
        $chitieungoaidong->delete();
        $arr = [
            'status' => true,
            'message' =>'Chỉ tiêu ngoài đồng đã được xoá',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
