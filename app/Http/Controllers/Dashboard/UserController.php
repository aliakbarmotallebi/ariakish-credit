<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Tariff;
use App\Models\User;
use App\Models\UserMeta;
use App\Traits\Uploadable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use Uploadable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::query();

        if($request->filled('status')){
            $users = $users->whereStatus($request->query('status'));
        }

        if($request->filled('mobile')){
            $users = $users->whereMobile($request->query('mobile'));
        }

        if($request->filled('fullname')){
            $users = $users->where('fullname', 'like', '%'.$request->query('fullname').'%');
        }

        if($request->filled('contract_number')){
            $users = $users->whereHas('meta', function($q) use ($request){
                $q->where('contract_number', $request->query('contract_number'));
            });
        }

        if($request->filled('shop_name')){
            $users = $users->whereHas('meta', function($q) use ($request){
                $q->where('shop_name_1', 'like', '%'.$request->query('shop_name').'%');
            });
        }

        $users = $users->latest()->paginate(15);
        return view('dashboard.user.index', 
            compact('users')    
        );
    }

}
