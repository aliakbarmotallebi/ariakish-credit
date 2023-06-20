@extends('layouts.user')
@section('title', 'مدیریت  پیش سفارش ها')
@section('content')
    <div class="px-4 md:px-8 lg:px-12 xl:px-20 py-16">
        <div>
            <p class="mb-3">لیست پرداختی ها</p>
            <div class="card border rounded-lg overflow-hidden">
                <div class="relative 4sm:w-[288px] 3sm:w-[343px] 2sm:w-[393px] sm:w-[608px] md:w-full lg:w-[584px] xl:w-full  overflow-x-auto">
                    <table class="w-full text-center">
                        <thead
                            class="text-xs border-b border-b-line text-neutral-700 font-bold uppercase bg-neutral-50 whitespace-nowrap">
                            <tr>
                                <th scope="col" class="px-5 py-4">کد رهگیری</th>
                                <th scope="col" class="px-5 py-4">
                                    مبلغ پرداختی (ریال)
                                </th>
                                <th scope="col" class="px-5 py-4">نام درگاه</th>
                                <th scope="col" class="px-5 py-4">
                                    وضعیت تراکنش
                                </th>
                                <th scope="col" class="px-5 py-4">ساعت</th>
                                <th scope="col" class="px-5 py-4">
                                    تاریخ تراکنش
                                </th>
                            </tr>
                        </thead>
                        <tbody class="whitespace-nowrap">
                        @forelse ($payments as $payment)
                            <tr class="border-b  text-black py-4">
                                <th class="text-center text-base px-6 py-4 font-medium whitespace-nowrap">
                                    {{ $payment->resnumber }}
                                </th>
                                <td scope="row" class="px-6 py-4 text-center text-base">
                                    {{ $payment->getAmount() }}
                                    ریال
                                </td>
                                <td scope="row" class="px-6 py-4 text-center text-base">
                                    {{ $payment->bank_name }}
                                </td>
                                <td scope="row" class="px-6 py-4 text-center text-base">
                                    @if ($payment->status == 'STATUS_PAID')
                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                        پرداخت موفق
                                    </span>
                                    @else 
                                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                        پرداخت ناموفق
                                    </span>
                                    @endif
                                </td>
                                <td scope="row" class="px-6 py-4 text-center text-base">
                                    {{ $payment->getTime() }}
                                </td>
                                <td scope="row" class="px-6 py-4 text-center text-base">
                                    {{ $payment->getDate() }}
                                </td>
                            </tr>
                          @empty
                            <tr>
                                <td colspan="6" align="center" >
                                    <div class="text-neutral-500 flex flex-col justify-center items-center py-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 fill-current" viewBox="0 0 24 24"><path d="M10.9999 2.04932L11 4.06182C7.05371 4.5539 4 7.9203 4 11.9999C4 16.4182 7.58172 19.9999 12 19.9999C13.8487 19.9999 15.5509 19.3729 16.9055 18.3199L18.3289 19.7427C16.605 21.1535 14.4014 21.9999 12 21.9999C6.47715 21.9999 2 17.5228 2 11.9999C2 6.81462 5.94662 2.55109 10.9999 2.04932ZM21.9506 13C21.7509 15.011 20.9555 16.8467 19.7433 18.3282L18.3199 16.9055C19.1801 15.7989 19.756 14.4606 19.9381 12.9999L21.9506 13ZM13.0011 2.04942C17.725 2.51895 21.4815 6.27583 21.9506 10.9998L19.9381 11C19.4869 7.38156 16.6192 4.51358 13.001 4.06194L13.0011 2.04942Z"></path></svg>
                                        <div class="text-xs font-medium mt-2">
                                            هیچ اطلاعاتی وجود ندارد
                                        </div>
                                    </div>
                                </td>
                            </tr>
                          @endforelse 
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center items-center py-5">
                {!! $payments->links('pagination::tailwind') !!}
               </div>
        </div>
    </div>
@endsection
