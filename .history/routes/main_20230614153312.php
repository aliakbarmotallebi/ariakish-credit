<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Panel\SecurityController;
use App\Http\Controllers\Dashboard\AdministratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\PaymentController;
use App\Http\Controllers\Security\UserLoginController;

Route::get('/', [MainController::class, 'home']);

Route::controller(UserLoginController::class)
->group(function() {
    Route::get('/identifier/login', 'showFormAuth');
    Route::post('/identifier/login', 'auth')->name('auth');
});

