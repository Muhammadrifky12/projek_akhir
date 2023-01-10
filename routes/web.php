<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GurubkController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GurutatibController;

use App\Http\Controllers\JenispelanggaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Input10rpl1Controller;
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



//Route  Kelas

// Route::get('/Kelas/search',[KelasController::class,'search']);
   

Route::middleware('guest')->group(function(){
    Route::get('/admin', function () {
        return view('layout.admin');    
    }); 
    Route::get('login', [LoginController::class,"index"])->name('login');
    Route::post('login', [LoginController::class,"authenticate"]);
});

Route::middleware('auth')->group(function(){
    // Route view
    Route::resource('viewsiswa',SiswaController::class);
    Route::resource('Guru',GuruController::class);
    Route::resource('dashboard',DashboardController::class);
    Route::resource('Quiz',QuizController::class);
    Route::resource('Pelanggaran',PelanggaranController::class);
    Route::resource('Gurubk',GurubkController::class);
    Route::resource('Gurutatib',GurutatibController::class);
    Route::resource('Kelas',KelasController::class);
    Route::resource('Jenis',JenispelanggaranController::class);
    Route::resource('Input10rpl1',Input10rpl1Controller::class);
    //route login
    Route::post('logout', [LoginController::class,"logout"]);
    //route hapus
    Route::get('viewsiswa/{nama_siswa}/hapus',[SiswaController::class,'hapus'])->name('viewsiswa.hapus');
    Route::get('Kelas/{kelass_kelas}/hapus',[KelasController::class,'hapus'])->name('Kelas.hapus');
    Route::get('Guru/{nama_guru}/hapus',[GuruController::class,'hapus'])->name('Guru.hapus');
    Route::get('jenispelaggaran/{jenisku_jenispelaggaran}/hapus',[JenispelanggaranController::class,'hapus'])->name('Jenis.hapus');
    Route::get('Gurubk/{nama_guru}/hapus',[GurubkController::class,'hapus'])->name('Gurubk.hapus');
    Route::get('Gurutatib/{id_nama_guru}/hapus',[GurutatibController::class,'hapus'])->name('Gurutatib.hapus');
    Route::get('/employee/pdf', [Input10rpl1Controller::class, 'createPDF']);
    Route::get('/', [Input10rpl1Controller::class, 'showEmployees']);
    //Route get
    Route::get('/Siswa', function () {
        return view('Siswa');    
    });
    Route::get('/History', function () {
        return view('history.History');    
    });
});
