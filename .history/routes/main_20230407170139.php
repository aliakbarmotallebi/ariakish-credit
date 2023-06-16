<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Panel\SecurityController;
use App\Http\Controllers\Dashboard\AdministratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\PaymentController;

Route::get('/', [MainController::class, 'home']);

Route::get('/login', [SecurityController::class, 'showFormLogin'])
    ->name('login');

Route::controller(PageController::class)
    ->prefix('page')
    ->as('page.')
    ->group(function() {
        Route::get('terms', 'termsPage')->name('terms');

    });

Route::controller(AdministratorController::class)
    ->group(function() {
        Route::get('administrator', 'showFormAuth');
        Route::post('administrator', 'auth')->name('auth');
    });

Route::get('/logout', [MainController::class, 'logout'])->name('logout');

Route::get('inquiry-sms', [InquirySmsController::class, 'getDataFormBodySMS']);

Route::any('/payments/callback', [PaymentController::class, 'callback'])
    ->withoutMiddleware(['auth', 'confirmed.user']) 
    ->name('payments.callback');