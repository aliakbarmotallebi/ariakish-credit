<?php

use App\Http\Controllers\Panel\OrderController;
use App\Http\Controllers\Panel\TicketController;
use App\Http\Controllers\Panel\CartController;
use App\Http\Controllers\Panel\CheckoutController;
use App\Http\Controllers\Panel\ContractController;
use App\Http\Controllers\Panel\ExportController;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\PaymentController;
use App\Http\Controllers\Panel\ProfileController;
use App\Http\Controllers\Panel\TariffController;
use App\Http\Controllers\Panel\TicketMessageController;
use App\Http\Controllers\Panel\WalletController;
use App\Http\Controllers\Panel\WarrantyController;
use Illuminate\Support\Facades\Route;


Route::get('/index', PanelController::class)->name('index');

Route::get('/profile/edit', [ProfileController::class, 'edit'])
    ->withoutMiddleware(['confirmed.user'])    
    ->name('profile.edit');

Route::put('profile', [ProfileController::class, 'update'])
    ->withoutMiddleware(['confirmed.user'])    
    ->name('profile.update');

Route::get('/payments', [PaymentController::class, 'index'])
    ->name('payments.index');
    
Route::any('/payments/callback', [PaymentController::class, 'callback'])
    ->withoutMiddleware(['auth', 'confirmed.user']) 
    ->name('payments.callback');

Route::get('/wallets', WalletController::class)->name('wallets.index');

Route::resource('carts', CartController::class);
Route::delete('carts/item/delete/{cart_item}', [CartController::class, 'delete'])->name('cart_item.delete');

Route::resource('orders', OrderController::class);

Route::controller(ExportController::class)
    ->prefix('exports')
    ->as('exports.')
    ->group(function() {
        Route::get('/labels/{order}', 'exportLabel')->name('labels');
    });

Route::get('checkouts/{cart}', [
    CheckoutController::class, 'show'
    ])->name('checkouts.show');
    
Route::post('checkouts/{cart}/save', [
    CheckoutController::class, 'save'
    ])->name('checkouts.save');

Route::get('tariffs', TariffController::class)->name('tariffs.index');

Route::get('contracts', [ ContractController::class, 'index'])->name('contracts.index');
Route::post('contracts', [ ContractController::class, 'store'])->name('contracts.store');

Route::post('ticket-messages/{ticket}', [TicketMessageController::class, 'store'])->name('ticket-messages.store');
Route::resource('tickets', TicketController::class);


// 'excluded_middleware' => ['auth'],