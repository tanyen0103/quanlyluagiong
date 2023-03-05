<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\ChiTieuTrongNha;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ChiTieuTrongNha as ResourcesChiTieuTrongNha;

class ChiTieuTrongNhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chỉtieutrongnha = ChiTieuTrongNha::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách chỉ tiêu trong nhà",
        'data'=>ResourcesChiTieuTrongNha::collection($chỉtieutrongnha)
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
            'chitieutrongnha_giec2' => ['max:255'],
            'chitieutrongnha_dorunghat' => ['max:255'],
            'chitieutrongnha_msvotrau' => ['max:255'],
            'chitieutrongnha_dangthoc' => ['max:255'],
            'chitieutrongnha_mausacgao' => ['max:255'],
            'chitieutrongnha_tl1000hat' => ['max:255'],
            'chitieutrongnha_doam' => ['max:255'],
            'chitieutrongnha_thom' => ['max:255'],
            'chitieutrongnha_danhgia' => ['']
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $chitieutrongnha = new ChiTieuTrongNha();
        $chitieutrongnha->giong_id = $request->giong_id;
        $chitieutrongnha->chitieutrongnha_giec2 = $request->chitieutrongnha_giec2;
        $chitieutrongnha->chitieutrongnha_dorunghat = $request->chitieutrongnha_dorunghat;
        $chitieutrongnha->chitieutrongnha_msvotrau = $request->chitieutrongnha_msvotrau;
        $chitieutrongnha->chitieutrongnha_dangthoc = $request->chitieutrongnha_dangthoc;
        $chitieutrongnha->chitieutrongnha_mausacgao = $request->chitieutrongnha_mausacgao;
        $chitieutrongnha->chitieutrongnha_tl1000hat = $request->chitieutrongnha_tl1000hat;
        $chitieutrongnha->chitieutrongnha_doam = $request->chitieutrongnha_doam;
        $chitieutrongnha->chitieutrongnha_thom = $request->chitieutrongnha_thom;
        $chitieutrongnha->chitieutrongnha_danhgia = $request->chitieutrongnha_danhgia;

        $chitieutrongnha->save($input);
        $arr = [
            'status' => true,
            'message' => "chỉ tiêu trong nhà đã lưu thành công",
            'data' => new ResourcesChiTieuTrongNha($chitieutrongnha)
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
        $chitieutrongnha = ChiTieuTrongNha::find($id);
        if(is_null($chitieutrongnha)){
            $arr = [
                'success' => false,
                'message' => 'Không có chỉ tiêu trong nhà này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết chỉ tiêu ngoài đồng',
            'data' => new ResourcesChiTieuTrongNha($chitieutrongnha)
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
    public function update(Request $request, ChiTieuTrongNha $chitieutrongnha)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'giong_id' => ['required'],
            'chitieutrongnha_giec2' => ['max:255'],
            'chitieutrongnha_dorunghat' => ['max:255'],
            'chitieutrongnha_msvotrau' => ['max:255'],
            'chitieutrongnha_dangthoc' => ['max:255'],
            'chitieutrongnha_mausacgao' => ['max:255'],
            'chitieutrongnha_tl1000hat' => ['max:255'],
            'chitieutrongnha_doam' => ['max:255'],
            'chitieutrongnha_thom' => ['max:255'],
            'chitieutrongnha_danhgia' => ['']
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $chitieutrongnha->giong_id = $request->giong_id;
        $chitieutrongnha->chitieutrongnha_giec2 = $request->chitieutrongnha_giec2;
        $chitieutrongnha->chitieutrongnha_dorunghat = $request->chitieutrongnha_dorunghat;
        $chitieutrongnha->chitieutrongnha_msvotrau = $request->chitieutrongnha_msvotrau;
        $chitieutrongnha->chitieutrongnha_dangthoc = $request->chitieutrongnha_dangthoc;
        $chitieutrongnha->chitieutrongnha_mausacgao = $request->chitieutrongnha_mausacgao;
        $chitieutrongnha->chitieutrongnha_tl1000hat = $request->chitieutrongnha_tl1000hat;
        $chitieutrongnha->chitieutrongnha_doam = $request->chitieutrongnha_doam;
        $chitieutrongnha->chitieutrongnha_thom = $request->chitieutrongnha_thom;
        $chitieutrongnha->chitieutrongnha_danhgia = $request->chitieutrongnha_danhgia;

        $chitieutrongnha->save($input);
        $arr = [
            'status' => true,
            'message' => "chỉ tiêu trong nhà đã cập nhật thành công",
            'data' => new ResourcesChiTieuTrongNha($chitieutrongnha)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTieuTrongNha $chitieutrongnha)
    {
        $chitieutrongnha->delete();
        $arr = [
            'status' => true,
            'message' =>'Chỉ tiêu trong nhà đã được xoá',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
