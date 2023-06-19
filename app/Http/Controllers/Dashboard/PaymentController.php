<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $payments_query = Payment::query();

        if($request->filled('status')){
            $payments_query = $payments_query->whereStatus($request->query('status'));
        }

        if($request->filled('mobile')){
            $payments_query = $payments_query->whereHas('user', function($q) use($request){
                $q->whereMobile($request->query('mobile'));
            });
        }

        if($request->filled('fullname')){
            $payments_query = $payments_query->whereHas('user', function($q) use($request){
                $q->where('fullname', 'like', '%'.$request->query('fullname').'%');
            });
        }
    
        $payments = [];
        $payments['List'] = $payments_query->latest()->paginate(15);
        $payments['Paid'] = $payments['List']->where('status', Payment::STATUS_PAID)->sum('amount');
        $payments['NonPaid'] = $payments['List']->where('status', Payment::STATUS_NONPAID)->sum('amount');

        return view('dashboard.payment.index',
            compact('payments')
        );
    }
}
