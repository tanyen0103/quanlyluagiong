<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\GiongController;
use App\Http\Controllers\API\MaPTNController;
use App\Http\Controllers\API\KieuHinhController;
use App\Http\Controllers\API\NhomGiongController;
use App\Http\Controllers\API\MaNgoaiDongController;
use App\Http\Controllers\API\GiaiDoanTruongThanhController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('nhomgiongs', NhomGiongController::class);

Route::resource('kieuhinhs', KieuHinhController::class);

Route::resource('giongs', GiongController::class);

Route::resource('mangoaidongs', MaNgoaiDongController::class);

Route::resource('maptns', MaPTNController::class);

Route::resource('giaidoantruongthanhs', GiaiDoanTruongThanhController::class);

