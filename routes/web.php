<?php

use App\Http\Controllers\AuthController;
use Illuminate\Routing\RouteGroup;
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



Route::post('/masuk',[AuthController::class,'masuk']);
Route::post('/logout',[AuthController::class,'logout']);
// user
Route::group(['middleware' => ['auth:pengguna']],function(){
    Route::get('/user', function () {
        return view('User.index');
    });
});
// user

Route::group(['middleware' => ['auth:user,petugas,pengguna']],function(){
    
});



Route::get('/daftar', function () {
    return view('register');
});


Route::get('/login',[AuthController::class,'login']);

Route::get('/', function () {
    return view('index');
});