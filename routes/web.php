<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GiongController;
use App\Http\Controllers\MaPTNController;
use App\Http\Controllers\KieuHinhController;
use App\Http\Controllers\NhomGiongController;
use App\Http\Controllers\LoaiSauBenhController;
use App\Http\Controllers\MaNgoaiDongController;
use App\Http\Controllers\LoaiGiaTriDoController;
use App\Http\Controllers\ChiTieuSauBenhController;
use App\Http\Controllers\ChiTieuTrongNhaController;
use App\Http\Controllers\GiaTriDoSauBenhController;
use App\Http\Controllers\GiaTriTinhTrangController;
use App\Http\Controllers\ChiTieuNgoaiDongController;
use App\Http\Controllers\DacDiemTinhTrangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GiaTriDoTrongNhaController;
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



Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);
    Route::get('users-export', [UserController::class, 'fileExport'])->name('users-export');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('nhomgiongs', NhomGiongController::class);
    Route::get('nhomgiongs-export', [NhomGiongController::class, 'fileExport'])->name('nhomgiongs-export');


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

});
