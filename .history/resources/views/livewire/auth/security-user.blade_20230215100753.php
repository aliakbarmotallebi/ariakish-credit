<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-yellow-500 py-12">
    <div class="relative bg-white px-6 pt-10 pb-9 shadow-xl mx-auto w-full max-w-lg rounded-2xl">
        <div class="mx-auto flex w-full max-w-md flex-col space-y-2">
            @if ($currentPage === 1)
                <div class="flex flex-col items-center justify-center text-center space-y-2">
                    <div class="absolute -top-10">
                        <img class="w-28 h-28 rounded" src="{{ asset('images/logo.jpg') }}" />
                    </div>
                    <div class="pt-10 text-sky-800">
                        <span class="px-1 font-semibold">
                            ثبت نام
                        </span>
                        |
                        <span class="px-1 font-semibold">
                            ورود به حساب کاربری
                        </span>
                    </div>
                </div>
                <form wire:submit.prevent="sendCodeToPhone">
                    <div class="text-sm text-gray-700 pt-5 text-right">
                        <div class="pb-2">
                            سلام!
                        </div>
                        لطفا شماره همراه خود را وارد کنید
                    </div>
                    <div class="flex flex-col space-y-8 mt-0">
                        <div class="mt-5">
                            <x-form.label label="شماره همراه" name="mobile" required />
                            <div class="h-16">
                                <input wire:model="mobile" type="text"
                                    class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-gray-700 @error('mobile') error-input @enderror">
                            </div>
                            <x-form.error name="mobile" />
                        </div>
                        <div class="flex flex-col">
                            <button wire:click.prevent="sendCodeToPhone" wire:loading.attr="disabled"
                                @class([
                                    'font-bold flex flex-row items-center justify-center text-center w-full border rounded-xl outline-none py-5 bg-yellow-200 border-none text-black/50 text-sm shadow-sm',
                                    '!bg-yellow-300 !text-black' => strlen($mobile) >= 11,
                                ])>
                                <svg wire:target="sendCodeToPhone" wire:loading.class.remove="hidden" aria-hidden="true"
                                    class="hidden inline ml-2 w-6 h-6 text-white animate-spin  fill-gray-900"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="currentColor" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentFill" />
                                </svg>
                                <span wire:target="sendCodeToPhone" wire:loading.class="hidden">
                                    تایید و ادامه
                                </span>

                            </button>
                        </div>
                    </div>

                </form>
        </div>
    @elseif($currentPage === 2)
        <div class="flex flex-col items-center justify-center text-center space-y-2">
            <div class="absolute -top-10">
                <img class="w-28 h-28 rounded" src="{{ asset('images/logo.jpg') }}" />
            </div>
            <div class="pt-10 text-sky-800">
                <button wirE:click="prevPage(1)" class="px-1 font-semibold inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 fill-current" viewBox="0 0 24 24" width="24"
                        height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M6.414 16L16.556 5.858l-1.414-1.414L5 14.586V16h1.414zm.829 2H3v-4.243L14.435 2.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 18zM3 20h18v2H3v-2z" />
                    </svg>
                    {{ $mobile }}
                </button>
            </div>
        </div>
        <form wire:submit.prevent="sendCodeToPhone">
            <div class="text-sm text-gray-700 pt-5 text-right">
                کدی که برای شما پیامک شد ارسال شد را وارد کنید
            </div>
            <div class="flex flex-col space-y-8 mt-0">
                <div class="mt-5">
                    <x-form.label label="کد ورود" name="code" required />
                    <div class="h-16">
                        <input wire:model="code" type="text" name="code" maxlength="6"
                            class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-gray-700 @error('code') error-input @enderror">
                    </div>
                    <x-form.error name="code" />
                </div>
                <div class="mt-4 text-center">
                    <div x-data="{
                        time: 60 * 2,
                        countdown: null,
                        active: false,
                        startTime() {
                            let self = this;
                            let timer = this.time,
                                minutes, seconds;
                            setInterval(function() {
                                let minutes = parseInt(timer / 60, 10);
                                let seconds = parseInt(timer % 60, 10);
                                minutes = minutes < 10 ? minutes : minutes;
                                seconds = seconds < 10 ? '0' + seconds : seconds;
                                self.countdown = seconds + ' : ' + minutes;
                                if (--timer < 0) { self.countdown = '0:00';
                                    self.active = true; }
                            }, 1000);
                        }
                    }" x-init="startTime();" class="text-sm text-gray-700 pt-4 font-normal">
                        <span x-bind:class="{ 'hidden': active }">
                            زمان باقی مانده
                            <span x-text="countdown" class="font-semibold ml-1">0:00</span>
                            ثانیه
                        </span>
                        <button :class="{ 'text-blue-600': active }" wire:click="resendCode"
                            x-bind:class="{ 'hidden': !active }">
                            کد را دریافت نکرده‌اید؟
                        </button>
                    </div>
                </div>
                <div class="flex flex-col">
                    <button wire:click.prevent="verify" wire:loading.attr="disabled" @class([
                        'font-bold flex flex-row items-center justify-center text-center w-full border rounded-xl outline-none py-5 bg-yellow-200 border-none text-black/50 text-sm shadow-sm',
                        '!bg-yellow-300 !text-black' => strlen($code) >= 5,
                    ])>
                        <svg wire:target="verify" wire:loading.class.remove="hidden" aria-hidden="true"
                            class="hidden inline ml-2 w-6 h-6 text-white animate-spin  fill-gray-900"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill" />
                        </svg>
                        <span wire:target="verify" wire:loading.class="hidden">
                            ورود به سیستم
                        </span>

                    </button>
                </div>
            </div>

        </form>
    </div>
    @endif
</div>
<div class="mx-auto flex w-full max-w-md flex-col space-y-2">
    <div class="pt-5">
        <a href="/"
            class="text-gray-900 hover:underline focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 ml-1 text-[#626890]" viewBox="0 0 24 24"
                width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                    d="M6 19h12V9.157l-6-5.454-6 5.454V19zm13 2H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zM7.5 13h2a2.5 2.5 0 1 0 5 0h2a4.5 4.5 0 1 1-9 0z" />
            </svg>
            برگشت به صفحه اصلی
        </a>
        <a href="{{ route('page.terms') }}"
            class="text-gray-900 hover:underline focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 ml-1 text-[#626890]" viewBox="0 0 24 24"
                width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                    d="M14 20v2H2v-2h12zM14.586.686l7.778 7.778L20.95 9.88l-1.06-.354L17.413 12l5.657 5.657-1.414 1.414L16 13.414l-2.404 2.404.283 1.132-1.415 1.414-7.778-7.778 1.415-1.414 1.13.282 6.294-6.293-.353-1.06L14.586.686z" />
            </svg>
            قوانین و شرایط آریا کیش
        </a>
    </div>
</div>
</div>
</div>