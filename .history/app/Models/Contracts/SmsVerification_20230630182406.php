<?php namespace App\Models\Contracts;

use Carbon\Carbon;
use App\Models\User;
use App\Uilities\SMSTools;

trait SmsVerification
{

    public function isExpired(): bool
    {
        if( empty($this->code_expired_at) || is_null($this->code_expired_at) ){
            return true;
        }
            
        return $this->code_expired_at->diffInMinutes(Carbon::now()) >= 2;
    }

    public function canResendCode()
    {
        if( empty($this->verify_code) ){
            return true;
        }

        if( $this->isExpired() ){
            return true;
        }

        return false;
    }

    public function sendCode($code)
    {
		
        if (! $this instanceof User) {
            throw new \Exception("No user");
        }


        $message = "کدتایید آریاکیش: {$code} \n لغو:11";

        $sender  = new SMSTools();
        $sender->to($this->mobile);
        $sender->text($message);
        $sender->send();

    }
}