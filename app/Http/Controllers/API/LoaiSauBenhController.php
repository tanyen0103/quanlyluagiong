<?php

namespace App\Http\Controllers\API;

use App\Models\LoaiSauBenh;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\LoaiSauBenh as ResourcesLoaiSauBenh;

class LoaiSauBenhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaisaubenh = LoaiSauBenh::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách loại sâu bệnh",
            'data'=>ResourcesLoaiSauBenh::collection($loaisaubenh)
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
    //         'loaisaubenh_ten' => ['required','unique:loaisaubenh','max:100'],
    //         'loaisaubenh_donvi' => ['max:100'],
    //         'loaisaubenh_mota' => [''],
    //         'loaisaubenh_hinhanh' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
    //     ]);
    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }

    //     if ($request->hasFile('loaisaubenh_hinhanh')) {
    //         $file = $request->file('loaisaubenh_hinhanh');
	// 	    $path = $request->loaisaubenh_hinhanh->storeAs('images', Str::slug($request->loaisaubenh_ten) .'_'. time() . '.' . $request->loaisaubenh_hinhanh->extension());

    //     }

    //     $loaisaubenh = new LoaiSauBenh();
    //     $loaisaubenh->loaisaubenh_ten = $request->loaisaubenh_ten;
    //     $loaisaubenh->loaisaubenh_ten_slug = Str::slug($request->loaisaubenh_ten);
    //     $loaisaubenh->loaisaubenh_mota = $request->loaisaubenh_mota;
    //     $loaisaubenh->loaisaubenh_donvi = $request->loaisaubenh_donvi;
    //     $loaisaubenh->loaisaubenh_hinhanh = $path;
    //     $loaisaubenh->save($input);
    //     $arr = [
    //         'status' => true,
    //         'message' => "Loại sâu bệnh đã lưu thành công",
    //         'data' => new ResourcesLoaiSauBenh($loaisaubenh)
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
        $loaisaubenh = LoaiSauBenh::find($id);
        if(is_null($loaisaubenh)){
            $arr = [
                'success' => false,
                'message' => 'Không có loại sâu bệnh này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết loại sâu bệnh',
            'data' => new ResourcesLoaiSauBenh($loaisaubenh)
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
    // public function update(Request $request, LoaiSauBenh $loaisaubenh)
    // {
    //     $input = $request->all();
    //     $validator = Validator::make($input,[
    //         'loaisaubenh_ten' => ['required','max:100'],
    //         'loaisaubenh_donvi' => ['max:100'],
    //         'loaisaubenh_mota' => [''],
    //         'loaisaubenh_hinhanh' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
    //     ]);
    //     if ($validator->fails()) {
    //         $arr = [
    //             'success' => false,
    //             'message' => 'Lỗi kiểm tra dữ liệu',
    //             'data' => $validator->errors()
    //         ];
    //         return response()->json($arr, 200);
    //     }

    //     if ($request->hasFile('loaisaubenh_hinhanh')) {
    //         $file = $request->file('loaisaubenh_hinhanh');
	// 	    $path = $request->loaisaubenh_hinhanh->storeAs('images', Str::slug($request->loaisaubenh_ten) . '.' . $request->loaisaubenh_hinhanh->extension());

    //         Storage::delete($loaisaubenh->loaisaubenh_hinhanh);
    //     }

    //     $loaisaubenh->loaisaubenh_ten = $request->loaisaubenh_ten;
    //     $loaisaubenh->loaisaubenh_ten_slug = Str::slug($request->loaisaubenh_ten);
    //     $loaisaubenh->loaisaubenh_mota = $request->loaisaubenh_mota;
    //     $loaisaubenh->loaisaubenh_donvi = $request->loaisaubenh_donvi;
    //     $loaisaubenh->loaisaubenh_hinhanh = $path;
    //     $loaisaubenh->save();
    //     $arr = [
    //         'status' => true,
    //         'message' => "Loại sâu bệnh đã cập nhật thành công",
    //         'data' => new ResourcesLoaiSauBenh($loaisaubenh)
    //     ];
    //     return response()->json($arr, 201);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(LoaiSauBenh $loaisaubenh)
    // {
    //     $loaisaubenh->delete();
    //     Storage::delete($loaisaubenh->loaisaubenh_hinhanh);
    //     $arr = [
    //         'status' => true,
    //         'message' =>'loại sâu bệnh đã được xoá',
    //         'data' => [],
    //     ];
    //     return response()->json($arr, 200);
    // }
}
