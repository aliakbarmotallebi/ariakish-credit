<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function showFormLogin()
    {
        return view('user.security');
    }

    public function logout()
    {
        Auth::logout();

        return redirect(RouteServiceProvider::HOME);
    }
}
