<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\ProjectController;
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

    Route::prefix('panel')->name('panel.')->group(function () {
        Route::get('/', [PanelController::class, 'index'])->name('index');
        Route::get('/my-account', [PanelController::class, 'myAccount'])->name('my-account.index');

        // Projetos — resource gera todas as rotas CRUD automaticamente
        Route::resource('projects', ProjectController::class);
    });
});
