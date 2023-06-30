<?php

use App\Http\Controllers\User\ApplianceController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/edit', [ProfileController::class, 'edit'])
->withoutMiddleware(['confirmed.user'])    
->name('profile.edit');

Route::get('rules', [ProfileController::class, 'rules'])
->withoutMiddleware(['confirmed.user'])    
->name('rules');

Route::put('profile', [ProfileController::class, 'update'])
->withoutMiddleware(['confirmed.user'])    
->name('profile.update');

Route::get('/appliances', [ApplianceController::class, 'index'])
    ->name('appliances.index');

Route::post('/appliances', [ApplianceController::class, 'store'])
    ->name('appliances.store');

Route::post('/payments/request', [PaymentController::class, 'request'])
    ->name('payments.request');

Route::any('/payments/callback', [PaymentController::class, 'callback'])
    ->name('payments.callback');

Route::get('/payments', [PaymentController::class, 'index'])
    ->name('payments.index');
    
Route::get('/wallets', WalletController::class)->name('wallets.index');

