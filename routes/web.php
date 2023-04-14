<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GiongController;
use App\Http\Controllers\MaPTNController;
use App\Http\Controllers\KieuHinhController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NhomGiongController;
use App\Http\Controllers\LoaiSauBenhController;
use App\Http\Controllers\MaNgoaiDongController;
use App\Http\Controllers\LoaiGiaTriDoController;
use App\Http\Controllers\ChiTieuSauBenhController;
use App\Http\Controllers\ChiTieuTrongNhaController;
use App\Http\Controllers\GiaTriDoChiTietController;
use App\Http\Controllers\GiaTriDoSauBenhController;
use App\Http\Controllers\GiaTriTinhTrangController;
use App\Http\Controllers\ChiTieuNgoaiDongController;
use App\Http\Controllers\DacDiemTinhTrangController;
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

Route::get('/docs', function () {
    return view('docs');
})->name('docs');

Route::get('/danhmuc', function () {
    return view('danhmuc');
})->name('danhmuc');

Route::get('/chitieu', function () {
    return view('quanlychitieu');
})->name('chitieu');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class);

    Route::get('/danhmuc', function () {
        return view('danhmuc');
    })->name('danhmuc');

    Route::get('/chitieu', function () {
        return view('quanlychitieu');
    })->name('chitieu');

    Route::resource('users', UserController::class);
    Route::get('users-export', [UserController::class, 'fileExport'])->name('users.export');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('dashboards-export', [DashboardController::class, 'fileExport'])->name('dashboards.export');
    Route::get('thongkes-export', [DashboardController::class, 'fileExportThongKe'])->name('thongkes.export');


    Route::resource('nhomgiongs', NhomGiongController::class);
    Route::get('nhomgiongs-export', [NhomGiongController::class, 'fileExport'])->name('nhomgiongs.export');

    Route::get('kieuhinhs-export', [KieuHinhController::class, 'fileExport'])->name('kieuhinhs.export');
    Route::resource('kieuhinhs', KieuHinhController::class);

    Route::resource('giongs', GiongController::class);
    Route::get('giongs-export', [GiongController::class, 'fileExport'])->name('giongs.export');

    Route::resource('mangoaidongs', MaNgoaiDongController::class);

    Route::resource('maptns', MaPTNController::class);

    Route::resource('giaidoantruongthanhs', GiaiDoanTruongThanhController::class);

    Route::resource('doituongtinhtrangs', DoiTuongTinhTrangController::class);

    Route::resource('dacdiemtinhtrangs', DacDiemTinhTrangController::class);

    Route::resource('giatritinhtrangs', GiaTriTinhTrangController::class);
    Route::get('giatritinhtrangs-export', [GiaTriTinhTrangController::class, 'fileExport'])->name('giatritinhtrangs.export');

    Route::resource('loaigiatridos', LoaiGiaTriDoController::class);

    Route::resource('chitieungoaidongs', ChiTieuNgoaiDongController::class);

    Route::resource('giatridongoaidongs', GiaTriDoNgoaiDongController::class);
    Route::get('giatridongoaidongs-export', [GiaTriDoNgoaiDongController::class, 'fileExport'])->name('giatridongoaidongs.export');

    Route::resource('chitieutrongnhas', ChiTieuTrongNhaController::class);

    Route::resource('giatridotrongnhas', GiaTriDoTrongNhaController::class);
    Route::get('giatridotrongnhas-export', [GiaTriDoTrongNhaController::class, 'fileExport'])->name('giatridotrongnhas.export');


    Route::resource('chitieusaubenhs', ChiTieuSauBenhController::class);

    Route::resource('loaisaubenhs', LoaiSauBenhController::class);

    Route::resource('giatridosaubenhs', GiaTriDoSauBenhController::class);
    Route::get('giatridosaubenhs-export', [GiaTriDoSauBenhController::class, 'fileExport'])->name('giatridosaubenhs.export');

    Route::resource('giatridochitiets', GiaTriDoChiTietController::class);

    // Backup
    Route::get('/backup/run', function () {
        Artisan::call('backup:run');
        return redirect()->back()->with('success', 'Backup has been run successfully!');
    })->name('backup.run');

});
