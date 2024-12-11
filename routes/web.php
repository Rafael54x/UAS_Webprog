<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\ImageController;

Route::get('/image', [ImageController::class, 'image']); 
Route::get('/admin', [ImageController::class, 'admin']); 
Route::post('/admin/upload', [ImageController::class, 'upload']); 


Route::get('/', function () {
    return view('layouts/app');
});

Route::get('/kritik-saran', function () {
    return view('user/kritik-saran');
});

Route::get('/faq', function () {
    return view('user/faq');
});

Route::get('/acara', function () {
    return view('user/acara');
});

Route::get('/daftar', function () {
    return view('user/daftar');
});

Route::get('/jadwal', function () {
    return view('user/jadwal');
});

Route::get('/about-us', function () {
    return view('user/about-us');
});

Route::get('/acara-mendatang', function () {
    return view('user/acara-mendatang');
});

Route::get('/latihan', function () {
    return view('user/latihan');
});

Route::post('/kritik', [KritikSaranController::class, 'store_kritik'])->name('kritik.store');
Route::post('/saran', [KritikSaranController::class, 'store_saran'])->name('saran.store');