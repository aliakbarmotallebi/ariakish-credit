<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payments = [];
        $payments['List'] = $request->user()->payments()->latest()->paginate(15);
        $payments['Paid'] = $request->user()->payments()->whereStatus(Payment::STATUS_PAID)->sum('amount');
        $payments['NonPaid'] = $request->user()->payments()->whereStatus(Payment::STATUS_NONPAID)->sum('amount');
        
        return view('panel.payment',
            compact('payments')
        );
    }
}
