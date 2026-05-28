<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', fn() => view('welcome'));

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');

Route::middleware('guest')->group( function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
});

Route::middleware('auth')->group( function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', fn() => view('dashboard'))->name('site.dashboard');
    Route::get('/my-account', fn() => view('my-account'))->name('site.my-account');
});
