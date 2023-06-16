<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
        return view('panel.wallet.index',
            [
                'wallets' => $wallets,
                'user' => $request->user()
            ]
        );        
    }
}
