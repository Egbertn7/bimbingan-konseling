<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/user/detail', function () {
    return view('user.detail');
})->name('user.detail');


Route::prefix('user')->group(function () {
    Route::get('/create', [PengajuanController::class, 'create'])->name('user.create');
    Route::post('/create', [PengajuanController::class, 'store'])->name('pengajuan.store');


    Route::get('/register', [UserAuthController::class, 'showRegistrationForm'])->name('register.user');
    Route::post('/register', [UserAuthController::class, 'register']);
    Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout.user');
});

Route::prefix('admin')->group(function () {
    Route::get('/register', [AdminAuthController::class, 'showRegistrationForm'])->name('register.admin');
    Route::post('/register', [AdminAuthController::class, 'register']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout.admin');

    Route::get('/form', [AdminController::class, 'index'])->name('admin.form');
});
