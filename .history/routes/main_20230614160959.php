<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Security\UserLoginController;

Route::get('/', [MainController::class, 'home']);

Route::controller(UserLoginController::class)
->group(function() {
    Route::get('/identifier', 'showFormAuth');
    Route::post('/identifier', 'auth')->name('auth');
});

