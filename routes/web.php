<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiongController;
use App\Http\Controllers\MaPTNController;
use App\Http\Controllers\KieuHinhController;
use App\Http\Controllers\NhomGiongController;
use App\Http\Controllers\MaNgoaiDongController;
use App\Http\Controllers\LoaiGiaTriDoController;
use App\Http\Controllers\ChiTieuTrongNhaController;
use App\Http\Controllers\GiaTriTinhTrangController;
use App\Http\Controllers\ChiTieuNgoaiDongController;
use App\Http\Controllers\DacDiemTinhTrangController;
use App\Http\Controllers\DoiTuongTinhTrangController;
use App\Http\Controllers\GiaTriDoNgoaiDongController;
use App\Http\Controllers\GiaiDoanTruongThanhController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
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

// Route::resource('giatridotrongnhas', GiaTriDoTrongNhaController::class);
