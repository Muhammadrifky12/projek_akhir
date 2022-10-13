<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\KerapianController;
use App\Http\Controllers\KerajinanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Siswa11Controller;
use App\Http\Controllers\Siswa12Controller;
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

Route::resource('dashboard',DashboardController::class);
Route::resource('login',LoginController::class);
Route::resource('register',RegisterController::class);
Route::resource('Pelanggaran_kerajinan',KerajinanController::class);
// Route::resource('Pelanggaran_sikap_prilaku',PelanggaranController::class);
Route::resource('Pelanggaran',PelanggaranController::class);
Route::resource('Pelanggaran_kerapian',KerapianController::class);
Route::resource('Quiz',QuizController::class);
//View Siswa
Route::resource('viewsiswa',SiswaController::class);
Route::resource('viewsiswa11',Siswa11Controller::class);
Route::resource('viewsiswa12',Siswa12Controller::class);
// Route::post('register',RegisterController::class, 'store');
//View Kelas
Route::resource('Kelas',KelasController::class);
Route::get('/Kelas/search',[KelasController::class,'search']);
Route::get('/admin', function () {
    return view('layout.admin');    
});
Route::get('/Siswa', function () {
    return view('Siswa');    
});
Route::get('/p', function () {
    return view('popup');    
});
// Route::get('/kelas', function () {
//     return view('Kelas');    
// });
// Route::get('/Pelanggaran', function () {
//     return view('Pelanggaran');    
// });