<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\GiongController;
use App\Http\Controllers\API\MaPTNController;
use App\Http\Controllers\API\KieuHinhController;
use App\Http\Controllers\API\NhomGiongController;
use App\Http\Controllers\API\LoaiSauBenhController;
use App\Http\Controllers\API\MaNgoaiDongController;
use App\Http\Controllers\API\LoaiGiaTriDoController;
use App\Http\Controllers\API\ChiTieuSauBenhController;
use App\Http\Controllers\API\ChiTieuTrongNhaController;
use App\Http\Controllers\API\GiaTriDoSauBenhController;
use App\Http\Controllers\API\GiaTriTinhTrangController;
use App\Http\Controllers\API\ChiTieuNgoaiDongController;
use App\Http\Controllers\API\DacDiemTinhTrangController;
use App\Http\Controllers\API\GiaTriDoTrongNhaController;
use App\Http\Controllers\API\DoiTuongTinhTrangController;
use App\Http\Controllers\API\GiaTriDoNgoaiDongController;
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

// Authentication API with Passport
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::delete('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);
    });
});

Route::resource('nhomgiongs', NhomGiongController::class);

Route::resource('kieuhinhs', KieuHinhController::class);

Route::resource('giongs', GiongController::class);

Route::resource('mangoaidongs', MaNgoaiDongController::class);

Route::resource('maptns', MaPTNController::class);

Route::resource('giaidoantruongthanhs', GiaiDoanTruongThanhController::class);

Route::resource('doituongtinhtrangs', DoiTuongTinhTrangController::class);

Route::resource('dacdiemtinhtrangs', DacDiemTinhTrangController::class);

Route::resource('giatritinhtrangs', GiaTriTinhTrangController::class);

Route::resource('loaigiatridos', LoaiGiaTriDoController::class);

Route::resource('chitieungoaidongs', ChiTieuNgoaiDongController::class);

Route::resource('giatridongoaidongs', GiaTriDoNgoaiDongController::class);

Route::resource('chitieutrongnhas', ChiTieuTrongNhaController::class);

Route::resource('giatridotrongnhas', GiaTriDoTrongNhaController::class);

Route::resource('chitieusaubenhs', ChiTieuSauBenhController::class);

Route::resource('loaisaubenhs', LoaiSauBenhController::class);

Route::resource('giatridosaubenhs', GiaTriDoSauBenhController::class);

Route::resource('users', UserController::class);



