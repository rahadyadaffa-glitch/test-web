<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminEventController;

// Halaman Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Route untuk Guest (Yang belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Route untuk Auth (Yang sudah login)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', function () {
        return view('dashboard_user');
    })->name('dashboard');

    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
});

// Rute Khusus Admin
Route::prefix('admin')->group(function () {
    
    // Rute untuk Admin yang BELUM login (guest:admin)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
        Route::post('/login', [AdminAuthController::class, 'login']);
    });

    // Rute untuk Admin yang SUDAH login (auth:admin)
    Route::middleware('auth:admin')->group(function () {
        // KOREKSI: Cukup tulis '/dashboard', nanti otomatis jadi '/admin/dashboard'
        Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/events', [AdminEventController::class, 'index'])->name('admin.events.index');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});