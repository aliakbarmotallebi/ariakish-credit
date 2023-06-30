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
    
    public function showFormAuth()
    {
        return view('panel.security');
    }
    
    public function auth(Request $request)
    {
        $request->validate([
            '_identifier' => 'required|numeric',
        ]);

        if ( ! $this->checkUser($request) ) {
            toast('نام کاربری یا گذارواژه متعبر نمی باشد','error');
            return redirect()->back();
        }
        
        toast('با موفقیت وارد سیستم شدید','success');
        return redirect()->route('user.profile.edit');
    }

    protected function checkUser(string $mobile) : bool
    {
        $credentials = [
            'mobile' => $mobile,
            'password' => '123456789',
            'role' => 'ROLE_CUSTOMER'
        ];

        if ( auth()->attempt( $credentials , true) ){
            return true;
        }

        return false;
    }

    public function logout()
    {
        Auth::logout();

        return redirect(RouteServiceProvider::HOME);
    }
}
