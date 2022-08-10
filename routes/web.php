<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Auth::routes();

// admin
Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);
    // akun pendaftar
    Route::get('/admin/users', [AdminController::class, 'listuser']);
    // profil pendaftar
    Route::get('/admin/santri', [AdminController::class, 'listprofil']);
    Route::get('/admin/santri/profil/{id}', [AdminController::class, 'profil']);
    Route::post('/admin/batalkonfirmasiformulir', [AdminController::class, 'batalkonfirmasiformulir']);
    Route::get('/admin/santri/print/{id}', [AdminController::class, 'printformulir']);
    Route::get('/admin/santri/berkas/{id}', [AdminController::class, 'berkas']);
    //status kelulusan
    Route::get('/admin/status', [AdminController::class, 'listkelulusan']);
    Route::post('/admin/lulus/{id}', [AdminController::class, 'updatestatus']);

    //berkas daftar ulang
    Route::get('/admin/daftarulang', [AdminController::class, 'listberkas']);
});


// pendaftar
Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [UserController::class, 'dashboard']);
// formulir
    Route::get('/formulirpendaftaran', [UserController::class, 'formulir']);
    Route::post('/formulirpendaftaran', [UserController::class, 'formulirsubmit']);

// kartu
    Route::get('/kartupendaftaran',[UserController::class,'viewkartu']);
    Route::get('/kartupendaftaran/print',[UserController::class,'kartuprint']);
// pengumuman
    Route::get('/pengumuman', [UserController::class,'pengumuman']);
    Route::get('/pengumumankelulusan', [UserController::class,'pengumumansemua']);
// daftarulang
    Route::get('/daftarulang',[UserController::class,'daftarulang']);
// pin
    Route::get('/pin', function () {
    });
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// belum dibuat middleware


//admin
