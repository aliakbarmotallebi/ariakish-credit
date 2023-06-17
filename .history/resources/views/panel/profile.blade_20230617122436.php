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
            <div class="p-10">
                <form class="grid grid-cols-2 gap-3" action="#">
                    <div class="flex flex-col">
                        <label class="text-sm" for="name"> نام 
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input type="text" id="name" name="name" value="{{ $user->fullname }}"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="national-code">
                            کد ملی
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input type="text" id="national-code" name="national-code"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="phone">
                            شماره ثابت
                        </label>
                        <input type="text" id="phone" name="phone"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="phone">
                            شماره همراه
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input type="text" id="mobile" name="mobile"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="phone">
                            شماره همراه 2
                        </label>
                        <input type="text" id="mobile-2" name="mobile-2"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="zip-code">کد پستی</label>
                        <input type="text" id="zip-code" name="zip-code"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="address">آدرس</label>
                        <textarea name="address" id="address" rows="3"
                            class="border mt-3 border-line rounded-md py-1.5 focus:outline-none focus-within:border-textMain px-4 bg-main/50"></textarea>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-sm" for="address">تصویر کارت ملی</p>
                        <div rows="3" for="national-cart"
                            class="flex h-[86px] justify-between items-start border mt-3 border-line rounded-md p-1.5 bg-main/50">
                            <label for="national-cart"
                                class="text-link cursor-pointer border px-3 py-1 bg-main hover:bg-main/5 transition-all duration-200 rounded">
                                <svg width="14" height="14" viewBox="0 0 14 14" class="inline" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.8333 9.33298V12.2496C12.8333 12.4043 12.7719 12.5527 12.6625 12.6621C12.5531 12.7715 12.4047 12.833 12.25 12.833H1.75C1.59529 12.833 1.44692 12.7715 1.33752 12.6621C1.22812 12.5527 1.16667 12.4043 1.16667 12.2496V9.33298H0V12.2496C0 12.7138 0.184374 13.1589 0.512563 13.4871C0.840752 13.8153 1.28587 13.9996 1.75 13.9996H12.25C12.7141 13.9996 13.1592 13.8153 13.4874 13.4871C13.8156 13.1589 14 12.7138 14 12.2496V9.33298H12.8333Z"
                                        fill="#2563EB" />
                                    <path
                                        d="M6.9807 -0.000130695C6.75098 -0.000763963 6.52339 0.0439442 6.31098 0.131431C6.09857 0.218919 5.90551 0.347465 5.74287 0.509703L3.45679 2.79579L4.28162 3.62062L6.40145 1.50137L6.41662 11.0832H7.58329L7.56812 1.50954L9.6792 3.62062L10.504 2.79579L8.21795 0.509703C8.05542 0.347483 7.86247 0.218943 7.65015 0.131454C7.43783 0.0439655 7.21034 -0.000750906 6.9807 -0.000130695Z"
                                        fill="#2563EB" />
                                </svg>
                                <small>بارگذاری</small>
                            </label>
                            <input type="file" id="national-cart" name="national-cart" class="hidden" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-4 text-left">
            <button
                class="bg-primary text-white text-sm rounded-md py-1.5 px-4 hover:bg-primary/80 transition-all duration-200">
                ویرایش پروفایل
            </button>
        </div>
    </div>
@endsection
