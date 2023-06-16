<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;

class MainController extends Controller
{
    public function logout()
    {
        auth()->logout();

        return redirect(RouteServiceProvider::HOME);
    }
}
