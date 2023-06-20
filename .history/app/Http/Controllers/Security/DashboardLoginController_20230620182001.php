<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardLoginController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
    }

    public function showFormAuth()
    {
        return view('dashboard.security');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'passcode' => 'required'
        ]);

        if ( ! $this->checkUser($request) ) {
            toast('نام کاربری یا گذارواژه متعبر نمی باشد','error');
            return redirect()->back();
        }
        
        toast('با موفیقت وارد سیستم شدید','success');
        return redirect()->route('dashboard.users.index');
    }

    protected function checkUser(Request $request) : bool
    {
        $credentials = [
            'code'     => $request->username,
            'password' => $request->passcode,
            'role'     => 'ROLE_ADMIN'
        ];

        dd(auth()->attemptWhen($credentials));

        if (auth()->attempt($credentials, true)) {
            return true;
        }

        return false;
    }
}
