@extends('layouts.user')
@section('title', 'مدیریت  پیش سفارش ها')
@section('content')
    <div class="px-20 py-16">
        <div class="border rounded-xl">
            <div class="bg-primary h-12 rounded-t-xl relative py-8">
                <div
                    class="flex absolute -top-1/2 -translate-y-0 right-12 items-center justify-center bg-white rounded-full p-6 border-4 border-white outline-1	outline	outline-offset-1 outline-gray-100">
                    <svg width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.14616 27.757C8.89944 27.9309 11.1372 28 14 28C16.8628 28 19.1006 27.9309 20.8538 27.757C22.6264 27.5811 23.7676 27.3094 24.5081 26.9788C25.1847 26.6767 25.4704 26.3539 25.6434 26.0066C25.8532 25.5851 26 24.9137 26 23.75C26 22.5863 25.8532 21.9149 25.6434 21.4934C25.4704 21.1461 25.1847 20.8233 24.5081 20.5212C23.7676 20.1906 22.6264 19.9189 20.8538 19.743C19.1006 19.5691 16.8628 19.5 14 19.5C11.1372 19.5 8.89944 19.5691 7.14616 19.743C5.37359 19.9189 4.23245 20.1906 3.49193 20.5212C2.81525 20.8233 2.52955 21.1461 2.35665 21.4934C2.14683 21.9149 2 22.5863 2 23.75C2 24.9137 2.14683 25.5851 2.35665 26.0066C2.52955 26.3539 2.81525 26.6767 3.49193 26.9788C4.23245 27.3094 5.37359 27.5811 7.14616 27.757ZM8.36364 7.5C8.36364 10.5037 10.853 13 14 13C17.147 13 19.6364 10.5037 19.6364 7.5C19.6364 4.49625 17.147 2 14 2C10.853 2 8.36364 4.49625 8.36364 7.5ZM14 15C9.78255 15 6.36364 11.6421 6.36364 7.5C6.36364 3.35786 9.78255 0 14 0C18.2174 0 21.6364 3.35786 21.6364 7.5C21.6364 11.6421 18.2174 15 14 15ZM14 30C2.471 30 0 28.8969 0 23.75C0 18.6031 2.471 17.5 14 17.5C25.529 17.5 28 18.6031 28 23.75C28 28.8969 25.529 30 14 30Z"
                            fill="#042F2E" />
                    </svg>
                </div>
            </div>
            <div class="p-10"></div>
                <div class="my-5 flex items-center p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300" role="alert">
                    <span class="font-medium ml-2">
                    کاربر گرامی !    
                    </span> 
                    لطفا به تکمیل مشخصات فردی اقدام نمایید.
                    <div class="mr-auto">
                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                            تایید نشده
                        </span>
                    </div>
                </div>
                <form class="grid grid-cols-2 gap-3" action="{{ route('user.profile.update') }}" method="POST">
                    <div class="flex flex-col">
                        <label class="text-sm" for="fullname"> نام 
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input type="text" id="fullname" name="fullname" value="{{ $user->fullname }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="national-code">
                            کد ملی
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input type="text" id="national-code" name="national-code" value="{{ $user->fullname }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="tel">
                            شماره ثابت
                        </label>
                        <input type="text" id="tel" name="tel" value="{{ $user->tel }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="mobile">
                            شماره همراه
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input type="text" id="mobile" name="mobile" value="{{ $user->mobile }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="mobile_second">
                            شماره همراه 2
                        </label>
                        <input type="text" id="mobile_second" name="mobile_second" value="{{ $user->mobile_second }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="postal_code">کد پستی</label> 
                        <input type="text" id="postal_code" name="postal_code" value="{{ $user->postal_code }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="address">آدرس</label>
                        <textarea name="address" id="address" rows="3"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50">{{ $user->address }}</textarea>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-sm" for="address">تصویر کارت ملی</p>
                        @if($user->national_card_image_url)
                            <img src="w-full h-full" alt="" srcset="">
                        @else 
                            <label for="national-cart"
                                class="mt-3 text-neutral-700 border-neutral-800 cursor-pointer border border-dashed px-3 py-1 transition-all duration-200 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current inline ml-1" viewBox="0 0 24 24"><path d="M1 14.5C1 12.1716 2.22429 10.1291 4.06426 8.9812C4.56469 5.044 7.92686 2 12 2C16.0731 2 19.4353 5.044 19.9357 8.9812C21.7757 10.1291 23 12.1716 23 14.5C23 17.9216 20.3562 20.7257 17 20.9811L7 21C3.64378 20.7257 1 17.9216 1 14.5ZM16.8483 18.9868C19.1817 18.8093 21 16.8561 21 14.5C21 12.927 20.1884 11.4962 18.8771 10.6781L18.0714 10.1754L17.9517 9.23338C17.5735 6.25803 15.0288 4 12 4C8.97116 4 6.42647 6.25803 6.0483 9.23338L5.92856 10.1754L5.12288 10.6781C3.81156 11.4962 3 12.927 3 14.5C3 16.8561 4.81833 18.8093 7.1517 18.9868L7.325 19H16.675L16.8483 18.9868ZM13 13V17H11V13H8L12 8L16 13H13Z"></path></svg>
                                <small>بارگذاری عکس کارت ملی</small>
                            </label>
                            <input type="file" id="national-cart" name="national-cart" class="hidden" />
                        @endif
                    </div>
                    <div class="mt-4 text-left">
                        <button
                            type="submit"
                            class="bg-primary text-white text-sm rounded-md py-1.5 px-4 hover:bg-primary/80 transition-all duration-200">
                            ویرایش پروفایل
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
