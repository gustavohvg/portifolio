<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/contact', fn() => view('contact'))->name('contact');

Route::get('/my-account', fn() => view('my-account'))->name('my-account');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
