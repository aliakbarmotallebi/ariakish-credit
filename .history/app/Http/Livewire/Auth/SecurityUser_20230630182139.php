<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class SecurityUser extends Component
{
    public User $user;

    public int $currentPage = 1;

    public string $mobile = '';

    public $code;

    public function sendCodeToPhone()
    {
        $this->validate([
            'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
        ]);
        //

        $this->user =  User::whereMobile($this->mobile)->firstOr(function () {
            return User::create([
                'mobile' => $this->mobile,
                'password' => '123456789',
            ]);
        });


        if($this->user instanceof User){
            if( ! $this->user->canResendCode() ) {
                $this->toast(' بعد از 2 دقیقه مجددا تلاش کنید');
                return;
            }

            $this->user->callToVerify();
            $this->toast('کد تایید با موفیقت ارسال کنید' , 'success');

            $this->nextPage(2);

            return;
        }

        $this->toast('لطفا مجددا تلاش کنید');
        return;
    }




    public function toast($meassge = 'message', $status = 'error')
    {
        $this->dispatchBrowserEvent('swal', [
            'toast' => true,
            'icon' => $status,
            'title' => $meassge,
            'animation' => false,
            'position' => 'bottom',
            'showConfirmButton' => false,
            'timer' => 7000,
            'timerProgressBar' => true,
        ]);
    }

    public function resendCode()
    {
        if( ! $this->user->canResendCode() ) {
            $this->toast('بعد از 2 دقیقه مجددا تلاش کنید','error');
            return;
        }

        $this->user->callToVerify();
        $this->toast('کد تایید با موفیقت ارسال کنید' , 'success');
        $this->reset(['code']);
    }


    public function verify()
    {
        $this->validate([
            'code' => 'required|digits:6|numeric',
        ]);

        if($this->user->verify_code  != $this->code){
            $this->reset('code');
            $this->toast('کد اشتباه می باشد','error');
            return;
        }

        $credentials = [
            'mobile' => $this->mobile,
            'password' => '123456789',
        ];


        if ( ! auth()->attempt($credentials, true) ) {
            $this->toast('کد اشتباه می باشد','error');
            $this->reset('code');
            return;
        }

        $this->toast('با موفقیت وارد حساب کاربری شدید' , 'success');
        return redirect()->to('/panel/index');
    }

    public function nextPage($currentPage = 1) : void
    {
        $this->currentPage = $currentPage;
    }

    public function prevPage($currentPage = 1) : void
    {
        $this->mobile = '';
        $this->code = '';
        $this->currentPage = $currentPage;
    }

    public function render()
    {
        return view('livewire.auth.security-user');
    }
}
