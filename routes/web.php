<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\programStudiController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\transkripAkademikController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Mahasiswa\Mahasiswa2Controller;
use App\Http\Controllers\Matakuliah\MatakuliahSullyController;
use App\Http\Controllers\laporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/Welcome', function () {
    return view('welcome');
});
Route::get('/Profil', function () {
    return view('profil');
});
Route::get('/Mahasiswa', [mahasiswaController::class, 'index']);
//     return view('mahasiswa');
// });
Route::get('/Matakuliah', [matakuliahController::class, 'index']);

Route::get('/ProgramStudi', [programStudiController::class, 'index']);

Route::get('/Pembayaran', [pembayaranController::class, 'index']);

Route::get('/TranskripAkademik', [transkripAkademikController::class, 'index']);

Route::resource('/admin/item', ItemController::class);

Route::resource('/mahasiswa/mahasiswa2', Mahasiswa2Controller::class);

Route::resource('/matakuliah/matakuliah-sully', MatakuliahSullyController::class);

Route::get('/laporan', [laporanController::class,'index']);

Route::get('/laporan/cetak_pdf', [laporanController::class,'cetak_pdf']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
