<?php

use App\Http\Controllers\Dashboard\ContentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PaymentController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\WalletController;
use Illuminate\Support\Facades\Route;


Route::resource('/users', UserController::class);

Route::controller(ContentController::class)
    ->prefix('content')
    ->as('content.')
    ->group(function() {

        Route::get('/brands', 'getBrands')->name('brands');
        Route::post('/brands', 'storeBrand')->name('brands.store');
        
        Route::get('/products', 'getProducts')->name('products');
        Route::post('/products', 'storeProduct')->name('products.store');

        Route::get('/groups', 'getGroups')->name('groups');
        Route::post('/groups', 'storeGroup')->name('groups.store');

        Route::get('/variants', 'getVariants')->name('variants');
        Route::post('/variants', 'storeVariant')->name('variants.store');
    });

Route::get('payments', PaymentController::class)->name('payments.index');

Route::get('wallets', WalletController::class)->name('wallets.index');


