<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
Route::get('/', function () {
    return view('welcome');
});
// Route get dengan url'/beranda' dengan action beranda controller dengan menggunakan function index
Route::get('/beranda',[BerandaController::class,'index']);
Route::get('/login',[BerandaController::class,'login']);
Route::get('/dashboard', [BarangController::class, 'index']);
Route::get('/tambah', [BarangController::class, 'create']);
Route::post('/store', [BarangController::class,'store']);
Route::get('/edit/{id}', [BarangController::class, 'edit']);
Route::get('/tentang', [BerandaController::class, 'tentang']);
Route::post('/update/{id}', [BarangController::class,'update']);
Route::get('/delete/{id}', [BarangController::class,'destroy']);
