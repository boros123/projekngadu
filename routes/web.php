<?php

use App\Http\Controllers\AduanController;
use App\Models\Pengguna;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetugasController;
use App\Models\Ngaduan;
use App\Models\Petugas;

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

//login logout regis
Route::post('/regis',[AuthController::class,'register']);
Route::post('/masuk',[AuthController::class,'masuk']);
Route::post('/logout',[AuthController::class,'logout']);
Route::get('/daftar',[PetugasController::class,'index']);
Route::post('/petugas-daftar',[PetugasController::class,'store']);

// masyarakat
Route::group(['middleware' => ['auth:pengguna']],function(){
    Route::get('/user', function () {
        return view ('index');
    });
});

Route::post('/pengaduan', [AduanController::class,'store']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'daftar']);
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
// masyarakat

// admin dan petugas
Route::group(['middleware' => ['auth:user,petugas']],function(){
    Route::get('/dashboard', function () {
        return view('Dashboard.index',[
            'title' => 'Dashboard',
        ]);
    });

    Route::get('/laporan', function () {
        return view('Dashboard.data',[
            'title' => 'Data Laporan',
            'pengaduans' => Ngaduan::paginate(4)
        ]);
    });

    Route::get('/pengguna', function () {
        return view('Dashboard.pengguna',[
            'title' => 'Data Pengguna',
            'penggunas' => Pengguna::paginate(4)
        ]);
    });

    Route::get('/petugas', function () {
        return view('Dashboard.petugas',[
            'title' => 'Data Petugas',
            'petugas' => Petugas::all()
        ]);
    });

    Route::get('/hasil-pengaduan', function () {
        return view('Dashboard.hasil',[
            'title' => 'Data hasil pengaduan',
            'pengaduans' => Ngaduan::all()
        ]);
    });

 
    Route::get('/status{id}', [AduanController::class, 'edit']);
    Route::post('/create-tanggap{id}', [AduanController::class,'update']);

 
});
// admin dan petugas

Route::get('/cetak/{tglAwal}/{tglAkhir}', [AuthController::class, 'cetakPertanggal']);






