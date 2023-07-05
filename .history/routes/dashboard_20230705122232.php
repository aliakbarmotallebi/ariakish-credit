<?php

use App\Http\Controllers\Dashboard\ApplianceController;
use App\Http\Controllers\Dashboard\ContentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PaymentController;
use App\Http\Controllers\Dashboard\RequestRepairController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\WalletController;
use Illuminate\Support\Facades\Route;


Route::resource('/users', UserController::class);

Route::get('/appliances', [ApplianceController::class, 'index'])
    ->name('appliances.index');

Route::get('/appliances/{user}', [ApplianceController::class, 'show'])
    ->name('appliances.show');

Route::get('request/repairs', [RequestRepairController::class, 'index'])
    ->name('repair.index');

Route::get('payments', PaymentController::class)->name('payments.index');

Route::get('wallets', WalletController::class)->name('wallets.index');


