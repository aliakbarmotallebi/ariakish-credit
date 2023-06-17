<?php

use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/edit', [ProfileController::class, 'edit'])
    ->withoutMiddleware(['confirmed.user'])    
    ->name('profile.edit');

Route::put('profile', [ProfileController::class, 'update'])
    ->withoutMiddleware(['confirmed.user'])    
    ->name('profile.update');

Route::get('/appliances', [PaymentController::class, 'index'])
    ->name('appliances.index');

Route::get('/payments', [PaymentController::class, 'index'])
    ->name('payments.index');
    
Route::get('/wallets', WalletController::class)->name('wallets.index');
