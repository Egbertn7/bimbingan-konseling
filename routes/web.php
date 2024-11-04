<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\AdminAuthController;

Route::get('/', function () {
    return view('home');
});

// Route::resource('user', UserController::class);
Route::get('/user', [UserController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);


Route::view('/login', 'login')->name('login');

// masuk kehalaman user login/register
Route::prefix('user')->group(function () {
    Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login.user');
    Route::get('/register', [UserAuthController::class, 'showRegistrationForm'])->name('register.user');
    Route::post('/register', [UserAuthController::class, 'register']);
    Route::post('/login', [UserAuthController::class, 'login']);
    Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout.user');
});

// masuk kehalaman admih login/register
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login.admin');
    Route::get('/register', [AdminAuthController::class, 'showRegistrationForm'])->name('register.admin');
    Route::post('/register', [AdminAuthController::class, 'register']);
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout.admin');
});


// masuk ke halaman form user
Route::get('/user/halaman', function () {
    return view('user.halaman')->name('user.halaman');
})->middleware('auth');

// masuk ke halaman form admin
Route::get('/admin/halaman', function () {
    return view('admin.halaman')->name('admin.halaman');
})->middleware('auth');
