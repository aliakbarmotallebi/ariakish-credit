@extends('layouts.user')
@section('title', 'مدیریت  پیش سفارش ها')
@section('content')
    <div class="px-4 md:px-8 lg:px-12 xl:px-20 py-16">
        <div class="flex justify-end pb-7">
            <a href="{{ route('user.rules') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                مطالعه قوانین و مقرارت
            </a>
        </div>
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
            <div class="p-5 xl:p-10 pb-2">
                <div class="flex flex-col xl:flex-row gap-4 items-center my-2 p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <div>
                        <span class="font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-1 stroke-current" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 21.004H4.996a2 2 0 0 1-2-2.001V4.997a2 2 0 0 1 2-2h14.006a2 2 0 0 1 2 2V10M2.996 7.998h18.008m-4.002 7.654v3.144m1.572-1.572H15.43"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.003 21.004H15a2 2 0 0 1-2-2.001V15a2 2 0 0 1 2-2h4.002a2 2 0 0 1 2 2v4.002a2 2 0 0 1-2 2Z" clip-rule="evenodd"/>
                              </svg>
                            موجودی کیف پول شما: 
                        </span>
                        {{ number_format($user->balance()) }}
                        تومان
                    </div>
                    <a href="{{ route('user.wallets.index') }}" class="p-2.5  md:px-5 xl:mr-auto text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-1 md:ml-2 stroke-current" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 20H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2Z" clip-rule="evenodd"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v8m4-4H8"/>
                          </svg>
                        <span>شارژ کیف پول</span>
                    </a>
                  </div>
                <div class="my-2 flex flex-col gap-4 xl:gap-0 xl:flex-row items-center p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300" role="alert">
                    <span class="font-medium xl:ml-2">
                    کاربر گرامی !    
                    </span> 
                    لطفا به تکمیل مشخصات فردی اقدام نمایید.
                    <div class="xl:mr-auto">
                        @if ($user->isConfirmedUser())
                        <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-red-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline ml-1 fill-current" viewBox="0 0 24 24"><path d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z"></path></svg>
                            تایید شده
                        </span>
                        @else
                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline ml-1 fill-current" viewBox="0 0 24 24"><path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"></path></svg>
                            تایید نشده
                        </span>
                        @endif
                    </div>
                </div>
                <form class="flex flex-col md:grid md:grid-cols-2 gap-3 relative" action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col">
                        <label class="text-sm" for="mobile">
                            شماره همراه
                        </label>
                        <input type="text" value="{{ old('mobile', $user->mobile) }}"
                            class="bg-gray-100 border mt-3 border-line rounded-md py-1.5" disabled />
                        </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="fullname"> نام 
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input type="text" id="fullname" name="fullname" value="{{ old('fullname', $user->fullname) }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                            @error('fullname')
                            <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                {{ $message }}
                            </small>
                            @enderror
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="national-code">
                          کدملی
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input type="text" id="national_id_number" name="national_id_number" value="{{ old('national_id_number', $user->national_id_number) }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                            @error('national_id_number')
                            <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm" for="fullname"> 
                                شماره کارت وی آی پی 
                                <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                            </label>
                            <input type="text" id="fullname" name="fullname" value="{{ old('fullname', $user->fullname) }}"
                                class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                                @error('fullname')
                                <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                    {{ $message }}
                                </small>
                                @enderror
                        </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="tel">
                            شماره ثابت
                        </label>
                        <input type="text" id="tel" name="tel" value="{{ old('tel', $user->tel) }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                            @error('tel')
                            <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                    <div class="flex flex-col">
                        <label class="text-sm" for="mobile_second">
                            شماره همراه 2
                        </label>
                        <input type="text" id="mobile_second" name="mobile_second" value="{{ old('mobile_second', $user->mobile_second) }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                            @error('mobile_second')
                            <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm" for="national-code">
                                کد معرف
                            </label>
                            <input type="text" id="national_id_number" name="national_id_number" value="{{ old('national_id_number', $user->national_id_number) }}"
                                class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                                @error('national_id_number')
                                <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="postal_code">کد پستی</label> 
                        <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code', $user->postal_code) }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                            @error('postal_code')
                            <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="address">آدرس</label>
                        <textarea name="address" id="address" rows="3"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50">{{ old('address', $user->address) }}</textarea>
                            @error('address')
                            <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    <div class="flex flex-col">
                        <p class="text-sm" for="address">تصویر کارت ملی</p>
                        @if($user->national_card_image_url)
                            <div class="w-32 h-32 mt-3 border rounded-lg overflow-hidden">
                                <img class="w-full h-full objext-cover" src="{{ asset($user->national_card_image_url) }}" srcset="">
                            </div>
                        @else 
                            <label for="national_card_image_path"
                                class="mt-3 text-neutral-700 border-neutral-800 cursor-pointer border border-dashed px-3 py-1 transition-all duration-200 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current inline ml-1" viewBox="0 0 24 24"><path d="M1 14.5C1 12.1716 2.22429 10.1291 4.06426 8.9812C4.56469 5.044 7.92686 2 12 2C16.0731 2 19.4353 5.044 19.9357 8.9812C21.7757 10.1291 23 12.1716 23 14.5C23 17.9216 20.3562 20.7257 17 20.9811L7 21C3.64378 20.7257 1 17.9216 1 14.5ZM16.8483 18.9868C19.1817 18.8093 21 16.8561 21 14.5C21 12.927 20.1884 11.4962 18.8771 10.6781L18.0714 10.1754L17.9517 9.23338C17.5735 6.25803 15.0288 4 12 4C8.97116 4 6.42647 6.25803 6.0483 9.23338L5.92856 10.1754L5.12288 10.6781C3.81156 11.4962 3 12.927 3 14.5C3 16.8561 4.81833 18.8093 7.1517 18.9868L7.325 19H16.675L16.8483 18.9868ZM13 13V17H11V13H8L12 8L16 13H13Z"></path></svg>
                                <small>بارگذاری عکس کارت ملی</small>
                            </label>
                            <input type="file" id="national_card_image_path" name="national_card_image_path" class="hidden" />
                        @endif
                        @error('national_card_image_path')
						<small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
							{{ $message }}
						</small>
						@enderror
                    </div>
                    <div class="col-span-2 my-4 text-left border-t border-gray-200 py-5">
                        <button
                            type="submit"
                            class="bg-primary text-white hover:bg-primary/50 focus:ring-4 focus:outline-none focus:ring-primary/30 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            ویرایش پروفایل
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
