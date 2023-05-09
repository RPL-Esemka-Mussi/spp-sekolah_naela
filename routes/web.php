<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\userController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\sppController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\pembayaranController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route bisa level semuanya
Route::group(['middleware' => 'guest'], function (){
            Route::get('/login',[ LoginController::class, 'login'])->name('login');
            Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);
            Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'register']);
});



//register
Route::Post('/register', [\App\Http\Controllers\RegisterController::class, 'store']);


//  Route yang bukan admin                                     
Route::group(['middleware' => 'auth'], function (){
Route::get('/',[ LoginController::class, 'index']);
Route::post('/logout',[ LoginController::class, 'logout']);
Route::get('/pembayaran/transaksi/{id}',[ PembayaranController::class, 'transaksi']);

});

//  Route entri transaksi
Route::group(['middleware' => 'level:admin,petugas', 'auth'], function (){
Route::get('/pembayaran/transaksi/{id}',[ PembayaranController::class, 'transaksi']);

});

//  Route Pembayaran                                            
Route::group(['middleware' =>  'level:admin,petugas,siswa', 'auth'], function (){
Route::get('/pembayaran',[ PembayaranController::class, 'index']);
Route::post('/pembayaran/simpan',[ PembayaranController::class, 'simpan']);
Route::get('/pembayaran/edit/{id}',[ PembayaranController::class, 'edit']);
Route::post('/pembayaran/update',[ PembayaranController::class, 'update']);
Route::get('/pembayaran/hapus/{id}',[ PembayaranController::class, 'hapus']);
Route::get('/pembayaran/cetak',[ pembayaranController::class, 'cetak']);
Route::get('/pembayaran/cetak/{id}',[ pembayaranController::class, 'cetakid']);
Route::get('/pembayaran/history/{id}',[ pembayaranController::class, 'history']);

});

//                                            
Route::group(['middleware' => 'level:admin', 'auth'], function (){
// Route user
Route::get('/user',[ UserController::class, 'index']);
Route::get('/user/tambah',[ UserController::class, 'tambah']);
Route::post('/user/simpan',[ UserController::class, 'simpan']);
Route::get('/user/edit/{id}',[ UserController::class, 'edit']);
Route::post('/user/update',[ UserController::class, 'update']);
Route::get('/user/hapus/{id}',[ UserController::class, 'hapus']);

// Route kelas
Route::get('/kelas',[ KelasController::class, 'index']);
Route::get('/kelas/tambah',[ KelasController::class, 'tambah']);
Route::post('/kelas/simpan',[ KelasController::class, 'simpan']);
Route::get('/kelas/edit/{id}',[ KelasController::class, 'edit']);
Route::post('/kelas/update',[ KelasController::class, 'update']);
Route::get('/kelas/hapus/{id}',[ KelasController::class, 'hapus']);

// Route spp
Route::get('/spp',[ SPPController::class, 'index']);
Route::get('/spp/tambah',[ SPPController::class, 'tambah']);
Route::post('/spp/simpan',[ SPPController::class, 'simpan']);
Route::get('/spp/edit/{id}',[ SPPController::class, 'edit']);
Route::post('/spp/update',[ SPPController::class, 'update']);
Route::get('/spp/hapus/{id}',[ SPPController::class, 'hapus']);

// Route siswa
Route::get('/siswa',[ SiswaController::class, 'index']);
Route::get('/siswa/tambah',[ SiswaController::class, 'tambah']);
Route::post('/siswa/simpan',[ SiswaController::class, 'simpan']);
Route::get('/siswa/edit/{id}',[ SiswaController::class, 'edit']);
Route::post('/siswa/update',[ SiswaController::class, 'update']);
Route::get('/siswa/hapus/{id}',[ SiswaController::class, 'hapus']);
});

