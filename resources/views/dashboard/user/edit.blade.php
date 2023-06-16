@extends('dashboard.base')
@section('title', 'ویرایش اطلاعات کاربر')
@section('content')
    <x-layout.header title="ویرایش اطلاعات کابر">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z"/></svg>
        </x-slot>
        <x-slot name="little">
            در این بخش شما قادر به ویرایش و نمایش اطلاعات کاربر می باشد
        </x-slot>
        <a href="{{ route('dashboard.users.index') }}" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 ml-1 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/></svg>
           بازگشت به لیست
        </a>
    </x-layout.header>
    <x-layout.cart title="خلاصه وضعیت کاربر" >
        <x-slot name="header" class="!p-0"></x-slot>
        <x-slot name="content">
            <table class="w-full text-sm text-left text-gray-500">
                <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                            موجودی کیف پول
                        </th>
                        <td class="px-6 py-4 text-right whitespace-nowrap">
                            {{ number_format($user->balance()) }}
                            ریال
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                           وضعیت قرارداد ویژه
                           @if ($user->isContractApproved())
                               <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-yellow-600 inline" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26zm0-2.292l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275l-2.038 4.42-4.833.572 3.573 3.305-.949 4.773L12 15.968z"/></svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26zm0-2.292l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275l-2.038 4.42-4.833.572 3.573 3.305-.949 4.773L12 15.968z"/></svg>
                            @endif
                        </th>
                        <td class="px-6 py-4 text-right whitespace-nowrap">
                            @if ($user->isContractApproved())
                                <a href="{{ url($user->getContractFile()->file_path) }}" class="text-blue-500 underline">
                                    (دانلود فایل)
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                            متن پیام مدیر
                        </th>
                        <td class="px-6 py-4 text-right whitespace-nowrap">
                            {{ $user->message_from_admin }}
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                            وضعیت کاربر
                        </th>
                        <td class="px-6 py-4 text-right whitespace-nowrap">
                            @if ($user->status == 'STATUS_CONFIRMED')
                                <span class="text-green-800 text-xs font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                    کاربر تایید شده
                                </span>
                            @else
                                <span class="text-red-800 text-xs font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                    عدم تایید کاربر
                                </span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </x-slot>
    </x-layout.cart>
   <x-layout.cart title="کاربر" >
        <x-slot name="header" class="!p-0">
            @include('dashboard.user._tabs', [
                'user' => request()->route('user')
            ])
        </x-slot>
        <x-slot name="content">
            
            <div class="lg:px-20 py-5 sm:px-5 px-5">
                <form action="{{ route('dashboard.users.update', $user) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="section--f">
                        <div class="py-3 font-semibold underline text-blue-700 text-lg">   
                            مشخصات فردی
                        </div>
                        <div class="grid lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-2 gap-2">
                            <x-form.input label="نام کاربری" name="mobile" :value="$user->mobile"/>

                            <x-form.input label="نام و نام خانوادگی" name="fullname" :value="$user->fullname" required/>

                            <x-form.input label="کدملی" name="national_code" :value="$getMetaDataUser->national_code" required/>

                            <x-form.input label="شماره قرارداد" name="contract_number" :value="$getMetaDataUser->contract_number" required/>

                        </div>
                    </div>
                    <div class="section--f">
                        <div class="py-3 font-semibold underline text-blue-700 text-lg">   
                            محل سکونت
                        </div>
                        <div class="grid  lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-1 gap-2">
                            <x-form.input label="تلفن ثابت" name="tel" :value="$getMetaDataUser->tel" required/>

                            <x-form.input label="کد پستی" name="postal_code" :value="$getMetaDataUser->postal_code" required/>

                                <x-form.textarea label="  آدرس محل سکونت" :value="$getMetaDataUser->address" name="address" required />
                            
                                <x-form.textarea label="گزارش عملکرد" :value="$user->performance_report" name="performance_report" />
                        </div>
                    </div>
                    <div class="section--s">
                        <div class="py-3 font-semibold underline text-blue-700 text-lg">   
                            اطلاعات فروشگاه
                        </div>
                        <div class="grid  lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 gap-2">
                            <x-form.input label="نام فروشگاه 1" name="shop_name_1" :value="$getMetaDataUser->shop_name_1" required/>

                            <x-form.input label="نام فروشگاه 2" name="shop_name_2" :value="$getMetaDataUser->shop_name_2" />

                            <x-form.input label="نام فروشگاه 3" name="shop_name_3" :value="$getMetaDataUser->shop_name_3"/>

                            <x-form.input label="نام فروشگاه 4" name="shop_name_4" :value="$getMetaDataUser->shop_name_4"/>

                            <x-form.input label="آدرس وبسایت" name="website_url" :value="$getMetaDataUser->website_url" required/>

                            <x-form.input label="1آدرس صفحه فروشگاهی دیجی کالا 1 / با سلام1 / ترب" name="digikala_url_1" :value="$getMetaDataUser->digikala_url_1"/>

                            <x-form.input label="2آدرس صفحه فروشگاهی دیجی کالا 2 / با سلام2 / ترب" name="digikala_url_2" :value="$getMetaDataUser->digikala_url_2"/>

                            <x-form.input label="3آدرس صفحه فروشگاهی دیجی کالا 3 / با سلام3 / ترب" name="digikala_url_3" :value="$getMetaDataUser->digikala_url_3"/>

                            <x-form.input label="4آدرس صفحه فروشگاهی دیجی کالا 4 / با سلام4 / ترب" name="digikala_url_4" :value="$getMetaDataUser->digikala_url_4"/>
                        </div>
                    </div>     
                    <div class="section--s">
                        <div class="py-3 font-semibold underline text-blue-700 text-lg">   
                           مدارک
                        </div>

                        <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-2 items-center">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    فایل پیوست
                                    <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                                </label>
                            </div>
                            <div class="mr-auto">
                                <label class="cursor-pointer text-white bg-[#050708] hover:bg-[#050708]/80 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#050708]/40 dark:focus:ring-gray-600 mr-2 mb-2">
                                    <input type="file" name="national_card_image_path" class="hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current ml-1"><path fill="none" d="M0 0h24v24H0z"/><path d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zM4 18.385L5.763 17H20V5H4v13.385zM13 11v4h-2v-4H8l4-4 4 4h-3z"/></svg>
                                    بارگذاری عکس کارت ملی
                                </label>
                                
                                @error('national_card_image_path')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                    {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            @if (!$getMetaDataUser->isEmptyNationalCardImageUrl())
                            <div class="col-span-2">
                                <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                    <div class="space-x-2 truncate">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline text-gray-500" width="24" height="24" viewBox="0 0 24 24"><path d="M17 5v12c0 2.757-2.243 5-5 5s-5-2.243-5-5v-12c0-1.654 1.346-3 3-3s3 1.346 3 3v9c0 .551-.449 1-1 1s-1-.449-1-1v-8h-2v8c0 1.657 1.343 3 3 3s3-1.343 3-3v-9c0-2.761-2.239-5-5-5s-5 2.239-5 5v12c0 3.866 3.134 7 7 7s7-3.134 7-7v-12h-2z"/></svg>
                                        <a href="{{ asset($getMetaDataUser->national_card_image_url) }}" class="text-purple-700 hover:underline">
                                            برای نمایش عکس کارت ملی کلیک کنید
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        
                    </div>   

                    <div class="mt-14">
                        <x-form.button label="ذخیره تغییرات"/>
                    </div>
                </form>
            </div>
        
        </x-slot>
    </x-layout.cart>
@endsection

