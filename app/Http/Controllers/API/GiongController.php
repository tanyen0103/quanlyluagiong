<?php

namespace App\Http\Controllers\API;

use App\Models\Giong;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Giong as ResourcesGiong;

class GiongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giong = Giong::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách giống",
            'data'=>ResourcesGiong::collection($giong)
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
    //         'giong_ten' => ['required','unique:giong','max:255'],
    //         'nhomgiong_id' => ['required'],
    //         'kieuhinh_id' => ['required'],
    //         'giong_nguongoc' => [''],
    //         'giong_mota' => [''],
    //         'giong_hinhanh' => ['required','mimes:jpeg,png,jpg,gif,svg','max:2048'],
    //         'giong_ngaytrobong' => [''],
    //         'giong_ngaychin' => [''],
    //     ]);

    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }

    //     if ($request->hasFile('giong_hinhanh')) {
    //         $file = $request->file('giong_hinhanh');
	// 	    $path = $request->giong_hinhanh->storeAs('images', Str::slug($request->loaisaubenh_ten) .'_'. time() . '.' . $request->giong_hinhanh->extension());

    //     }

    //     $g = new Giong($input);
    //     $g->giong_ten = $request->giong_ten;
    //     $g->giong_ten_slug = Str::slug($request->giong_ten);
    //     $g->nhomgiong_id = $request->nhomgiong_id;
    //     $g->kieuhinh_id = $request->kieuhinh_id;
    //     $g->giong_nguongoc = $request->giong_nguongoc;
    //     $g->giong_mota = $request->giong_mota;
    //     $g->giong_ngaytrobong = $request->giong_ngaytrobong;
    //     $g->giong_ngaychin = $request->giong_ngaychin;
    //     $g->giong_hinhanh = $path;
    //     $g->save($input);
    //     $arr = [
    //         'status' => true,
    //         'message' => "Giống đã lưu thành công",
    //         'data' => new ResourcesGiong($g)
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
        $giong = Giong::find($id);
        if(is_null($giong)){
            $arr = [
                'success' => false,
                'message' => 'Không có giống này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết giống',
            'data' => new ResourcesGiong($giong)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
