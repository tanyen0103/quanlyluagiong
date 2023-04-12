<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\GiaTriDoTrongNha;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GiaTriDoTrongNha as ResourcesGiaTriDoTrongNha;

class GiaTriDoTrongNhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giatridotrongnha = GiaTriDoTrongNha::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách giá trị đo trong nhà",
        'data'=>ResourcesGiaTriDoTrongNha::collection($giatridotrongnha)
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
            'giatridotrongnha_giatri' => ['required','numeric'],
            'loaigiatrido_id' => ['required'],
            'chitieutrongnha_id' => ['required'],

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $giatridotrongnha = new GiaTriDoTrongNha();
        $giatridotrongnha->giatridotrongnha_giatri = $request->giatridotrongnha_giatri;
        $giatridotrongnha->loaigiatrido_id = $request->loaigiatrido_id;
        $giatridotrongnha->chitieutrongnha_id = $request->chitieutrongnha_id;

        $giatridotrongnha->save($input);
        $arr = [
            'status' => true,
            'message' => "Giá trị đo trong nhà đã lưu thành công",
            'data' => new ResourcesGiaTriDoTrongNha($giatridotrongnha)
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
        $giatridotrongnha = GiaTriDoTrongNha::find($id);
        if(is_null($giatridotrongnha)){
            $arr = [
                'success' => false,
                'message' => 'Không có giá trị đo trong nhà này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết giá trị đo trong nhà',
            'data' => new ResourcesGiaTriDoTrongNha($giatridotrongnha)
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
    public function update(Request $request, GiaTriDoTrongNha $giatridotrongnha)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'giatridotrongnha_giatri' => ['required','numeric'],
            'loaigiatrido_id' => ['required'],
            'chitieutrongnha_id' => ['required'],

        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $giatridotrongnha->giatridotrongnha_giatri = $request->giatridotrongnha_giatri;
        $giatridotrongnha->loaigiatrido_id = $request->loaigiatrido_id;
        $giatridotrongnha->chitieutrongnha_id = $request->chitieutrongnha_id;

        $giatridotrongnha->save();
        $arr = [
            'status' => true,
            'message' => "Giá trị đo trong nhà đã cập nhật thành công",
            'data' => new ResourcesGiaTriDoTrongNha($giatridotrongnha)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaTriDoTrongNha $giatridotrongnha)
    {
        $giatridotrongnha->delete();
        $arr = [
            'status' => true,
            'message' =>'Giá trị đo trong nhà đã được xoá',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
