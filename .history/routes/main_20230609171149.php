<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Panel\SecurityController;
use App\Http\Controllers\Dashboard\AdministratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\PaymentController;

Route::get('/', [MainController::class, 'home']);

// Route::get('/login', [SecurityController::class, 'showFormLogin'])
//     ->name('login');

// Route::controller(AdministratorController::class)
//     ->group(function() {
//         Route::get('admin', 'showFormAuth');
//         Route::post('admin', 'auth')->name('auth');
//     });

// Route::get('/logout', [MainController::class, 'logout'])->name('logout');

// Route::any('/payments/callback', [PaymentController::class, 'callback'])
//     ->withoutMiddleware(['auth', 'confirmed.user']) 
//     ->name('payments.callback');