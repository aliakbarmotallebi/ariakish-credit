<?php

namespace App\Http\Controllers\User;

use App\Facades\TransactionWalletManager;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Tariff;
use App\PaymentProcessor\Facades\PaymentManager;
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
        $payments = $request->user()->payments()->latest()->paginate(15);
        return view('panel.payment',
            compact('payments')
        );
    }

    public function request(Request $request)
    {
        $this->validate($request,[
            'amount' => 'required|numeric|exists:tariffs,id',
            'gateway' => 'required|in:MELLAT,SAMANKISH',
         ]);

         $tariff = Tariff::find($request->get('amount'));

         $deposit = TransactionWalletManager::deposit(
            amount: $tariff->getRawOriginal('amount_substitute'),
            user: $request->user(),
        );

        $payment =  PaymentManager::setDeriver($request->get('gateway'))
        ->setPaymentable($deposit)
        ->createRequest();

        if($payment->request()) {
            $deposit->payment()->create([
                'resnumber' => $payment->getResnumber(),
                'bank_name' => $request->get('gateway'),
                'amount' => $deposit->getAmountPay(),
                'user_id' => $request->user()->id,
                'return_url' => route('panel.wallets.index')
            ]);
            
            return $payment->redirect();
        }

        alert()->error('مشکل در پرداخت مبلغ شما تا 72 ساعت آینده بازگشت داده خواهد شد');
        return redirect()->route('user.payments.index');
    }

    public function callback(Request $request)
    {
        $this->validate($request,[
            'gateway' => 'required'
         ]);

        if (! in_array( $request->get('gateway') , ['MELLAT', 'SAMANKISH']) ) {
            return abort(403);
        }

        $gateway = $request->get('gateway'); 

        $payment =  PaymentManager::setDeriver($request->get('gateway') ?? 'SAMANKISH')
                    ->setRequest($request)
                    ->createVerfiy();

        if($payment->verify()) {
            $checkPayment = Payment::whereResnumber($payment->getResnumber());

            if($checkPayment->exists()){

                $checkPayment->update([
                    'status' => 'STATUS_PAID'
                ]);
                
                $checkPayment->first()->wallet->update([
                    'status' => 'STATUS_COMPLETED'
                ]);

                alert()->success('پرداختی شما درسیستم ثبت شد');
                return redirect()->to($checkPayment->first()->return_url);
            }
        }

        alert()->error('مشکل در پرداخت مبلغ شما تا 72 ساعت آینده بازگشت داده خواهد شد');
        return redirect()->route('user.payments.index');
    }
}
