<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\AdminCarousellController;
use App\Http\Controllers\CarousellController;
use App\Exports\KritikSaranExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\JadwalController;

Route::get('/export-kritik-saran', function () {
    return Excel::download(new KritikSaranExport, 'kritik_saran.xlsx');
})->name('kritik-saran.export');
Route::get('/kritik-saran', [KritikSaranController::class, 'index']);
Route::post('/kritik-saran', [KritikSaranController::class, 'store'])->name('kritik-saran.store');
Route::get('/admin/kritik-saran/export', [KritikSaranController::class, 'exportToExcel']);
Route::resource('jadwals', JadwalController::class);

// Authentication Routes (Guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin', [ImageController::class, 'admin']);
    Route::get('/admin/carousell', [AdminCarousellController::class, 'index']);
    Route::post('/admin/upload', [ImageController::class, 'upload'])->name('admin.upload'); // Image Upload
    Route::get('/admin/carousell', [CarousellController::class, 'create']);
    Route::get('/admin/kritik-saran', [KritikSaranController::class, 'kritiksaran']);
    Route::delete('/image/delete/{id}', [ImageController::class, 'delete'])->name('image.delete');
    Route::get('/admin/carousell', [CarousellController::class, 'create'])->name('carousell.index');
    Route::post('/admin/carousell', [CarousellController::class, 'store'])->name('carousell.store');
    Route::delete('/admin/carousell/{id}', [CarousellController::class, 'destroy'])->name('carousell.destroy');
    Route::get('/admin/kritik-saran', [KritikSaranController::class, 'view'])->name('kritik-saran.view');
    Route::post('/admin/kritik-saran/clear', [KritikSaranController::class, 'clear'])->name('kritik-saran.clear');
    Route::get('/admin/jadwals', [JadwalController::class, 'index'])->name('jadwals.index');
    Route::post('/admin/jadwals', [JadwalController::class, 'store'])->name('jadwals.store');
    Route::put('/admin/jadwals/{jadwal}', [JadwalController::class, 'update'])->name('jadwals.update');
    Route::delete('/admin/jadwals/{jadwal}', [JadwalController::class, 'destroy'])->name('jadwals.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware(['auth'])->name('logout');
});

// Public Routes (General pages like Home, About Us, etc.)
Route::get('/', function () {
    return view('layouts/app');  // Home page
});

Route::view('/kritik-saran', 'user/kritik-saran');
Route::view('/faq', 'user/faq');
Route::view('/acara', 'user/acara');
Route::view('/daftar', 'user/daftar');
Route::view('/jadwal', 'user/jadwal');
Route::view('/about-us', 'user/about-us');
Route::view('/acara-mendatang', 'user/acara-mendatang');
Route::view('/latihan', 'user/latihan');
Route::get('/image', [ImageController::class, 'image']); 
Route::get('/', [JadwalController::class, 'acaramendatang']);
Route::get('/acara', [JadwalController::class, 'acara']); 
Route::get('/latihan', [JadwalController::class, 'latihan']); 
Route::get('/acara-mendatang', [JadwalController::class, 'mendatang']);

Route::post('/kritik', [KritikSaranController::class, 'store_kritik'])->name('kritik.store');
Route::post('/saran', [KritikSaranController::class, 'store_saran'])->name('saran.store');

// Auth Routes (Generated by Breeze or Laravel Authentication)
require __DIR__.'/auth.php';
