<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appliance;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
   public function index(Request $request)
   {
        $appliances = Appliance::query();

        if($request->filled('code')){
            $appliances = $appliances->whereHas('user', function($q) use ($request){
                $q->where('code', $request->query('code'));
            });
        }

        if($request->filled('mobile')){
            $appliances = $appliances->whereHas('user', function($q) use ($request){
                $q->where('mobile', $request->query('mobile'));
            });
        }

        if($request->filled('fullname')){
            $appliances = $appliances->whereHas('user', function($q) use ($request){
                $q->where('fullname', 'like', '%'.$request->query('fullname').'%');
            });
        }

        $appliances = $appliances->latest()->paginate(15);
        return view('dashboard.appliances.index', compact('appliances'));
   }
}
