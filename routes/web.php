<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PinController;
use App\Http\Controllers\UserController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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
    $jumlahpendaftar = Siswa::all()->count();
    return view('welcome', compact('jumlahpendaftar'));
});

Auth::routes();

// admin
Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);
    // akun pendaftar
    Route::get('/admin/users', [AdminController::class, 'listuser']);
    Route::post('/admin/users/reset', [AdminController::class, 'resetpassuser']);
    // profil pendaftar
    Route::get('/admin/santri', [AdminController::class, 'listprofil']);
    Route::get('/admin/santri/profil/{id}', [AdminController::class, 'profil']);
    Route::post('/admin/batalkonfirmasiformulir', [AdminController::class, 'batalkonfirmasiformulir']);
    Route::get('/admin/santri/print/{id}', [AdminController::class, 'printformulir']);
    Route::get('/admin/santri/berkas/{id}', [AdminController::class, 'berkas']);
    //status kelulusan
    Route::get('/admin/status', [AdminController::class, 'listkelulusan']);
    Route::post('/admin/lulus', [AdminController::class, 'updatestatus']);
    Route::get('/admin/batal/{id}', [AdminController::class, 'statusbatal']);

    //berkas daftar ulang
    Route::get('/admin/daftarulang', [AdminController::class, 'listberkas']);
    Route::get('/admin/daftarulang/{id}/konfirmasi', [AdminController::class, 'listberkaskonfirmasi']);

    Route::get('/admin/jadwal',[JadwalController::class,'index']);
    Route::post('/admin/jadwal/submit',[JadwalController::class,'tambahjadwal']);
    Route::post('/admin/jadwal/edit',[JadwalController::class,'editjadwal']);
});


// pendaftar
Route::group(['middleware' => ['auth', 'checkpin']], function () {


    // kartu
    Route::get('/kartupendaftaran', [UserController::class, 'viewkartu']);
    Route::get('/kartupendaftaran/print', [UserController::class, 'kartuprint']);
    // pengumuman
    Route::get('/pengumuman', [UserController::class, 'pengumuman']);
    Route::get('/pengumumankelulusan', [UserController::class, 'pengumumansemua']);
    // daftarulang
    Route::get('/daftarulang', [UserController::class, 'daftarulang']);
    Route::post('/daftarulang', [UserController::class, 'daftarulangsubmit']);
    Route::get('/downloadbukti', [UserController::class, 'downloadbukti']);
    // pin
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [UserController::class, 'dashboard']);
    // formulir
    Route::get('/formulirpendaftaran', [UserController::class, 'formulir']);
    Route::post('/formulirpendaftaran', [UserController::class, 'formulirsubmit']);

    // [pin]
    Route::get('/pin', [PinController::class, 'index']);
    Route::post('/pinsubmit', [PinController::class, 'submit']);
});







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/zip/{id}', [App\Http\Controllers\ZipController::class, 'zipberkas']);


// belum dibuat middleware


//admin
