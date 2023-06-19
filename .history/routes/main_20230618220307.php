<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Security\DashboardLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Security\UserLoginController;

Route::redirect('/', '/identifier', 301);

Route::controller(UserLoginController::class)
->group(function() {
    Route::get('/identifier', 'showFormAuth');
    Route::post('/identifier', 'auth')->name('auth');
});

Route::controller(DashboardLoginController::class)
->group(function() {
    Route::get('llll', 'showFormAuth');
    Route::post('llll', 'auth')->name('auth');
});
Route::get('/logout', [MainController::class, 'logout'])->name('logout');