<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tariff;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $wallets = $request->user()->wallets()->latest()->paginate(15);
        $tariffs = Tariff::get();
        $tariff = new Tariff;
        $tariff->amount = 10000000;
        $tariff->amount_substitute = 20000000;
        $tariff->save();
        return view('panel.wallet',
            compact('wallets')
        );        
    }
}
