<?php

use Illuminate\Support\Facades\Routes;
use \App\Http\Controllers\MahasiswaController;
use \App\Http\Controllers\MatakuliahController;
use \App\Http\Controllers\RegmahasiswaController;

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

/*Route::get('/', function () {
    return view('mahasiswa');
})->name('mahasiswa.index');*/

Route::view('/','welcome');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/mahasiswa',[MahasiswaController::class,'index'])
    ->name('mahasiswa.index');
    Route::POST('/mahasiswa/simpan',[MahasiswaController::class,'simpan'])
    ->name('mahasiswa.simpan');
   Route::get('/mahasiswa/hapus/{id}',[MahasiswaController::class,'hapus'])
    ->name('mahasiswa.hapus');
   Route::get('/mahasiswa/tampil/{id}',[MahasiswaController::class,'tampil'])
    ->name('mahasiswa.tampil');
   Route::POST('/mahasiswa/rubah/{id}',[MahasiswaController::class,'update'])
    ->name('mahasiswa.update');
   /*PEMISAHAN ROUTE PROGRAM*/
    Route::get('/matakuliah',[MatakuliahController::class,'index'])
    ->name('matakuliah.index');
   Route::POST('/matakuliah/simpan',[MatakuliahController::class,'simpan'])
    ->name('matakuliah.simpan');
    Route::get('/matakuliah/hapus/{id}',[MatakuliahController::class,'hapus'])
    ->name('matakuliah.hapus');
   Route::get('/matakuliah/tampil/{id}',[MatakuliahController::class,'tampil'])
    ->name('matakuliah.tampil');
   Route::POST('/matakuliah/rubah/{id}',[MatakuliahController::class,'update'])
    ->name('matakuliah.update');
    /*PEMISAHAN ROUTE PROGRAM*/
   Route::POST('/regmahasiswa/simpan',[RegmahasiswaController::class,'simpan'])
    ->name('regmahasiswa.simpan');
   Route::get('/regmahasiswa',[RegmahasiswaController::class,'index'])
    ->name('regmahasiswa.index');
    Route::get('/regmahasiswa/tampil/{id}',[RegMahasiswaController::class,'tampil'])
    ->name('regmahasiswa.tampil');
    Route::get('/regmahasiswa/hapus/{id}',[RegmahasiswaController::class,'hapus'])
    ->name('regmahasiswa.hapus');
    Route::POST('/regmahasiswa/rubah/{id}',[RegmahasiswaController::class,'update'])
    ->name('regmahasiswa.update');
   
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
