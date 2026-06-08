<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// ==================== LANDING PAGE ====================
Route::get('/', function () {
    return view('landing-page');
});

// ==================== LANGUAGE SWITCHER ====================
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['id', 'en'])) {
        session(['locale' => $locale]);
    }
    return back();
})->name('lang.switch');

// ==================== AUTH ROUTES ====================

// Guest Middleware (belum login)
Route::middleware('guest')->group(function () {
    // Register
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Login
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

// Auth Middleware (sudah login) - TANPA verified dulu
Route::middleware('auth')->group(function () {
    
    // ==================== EMAIL VERIFICATION ROUTES ====================
    // Halaman notifikasi "harus verifikasi email" (tidak pakai verified middleware)
    Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    // Link verifikasi email (dari email)
    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    // Kirim ulang email verifikasi
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');
    
    // Logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Dashboard & Route Lain yang HARUS sudah verifikasi email
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Tambahkan route lain yang butuh verifikasi email di sini
});