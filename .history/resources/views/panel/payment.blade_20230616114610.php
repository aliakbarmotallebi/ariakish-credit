@extends('layouts.user')
@section('title', 'مدیریت  پیش سفارش ها')
@section('content')
    <div class="px-20 py-10">
        <div>
            <p class="mb-3">لیست پرداختی ها</p>
            <div class="card border rounded-lg overflow-hidden">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-center">
                        <thead
                            class="text-xs border-b border-b-line text-neutral-700 font-bold uppercase bg-neutral-50 whitespace-nowrap">
                            <tr>
                                <th scope="col" class="px-4 py-2">کد رهگیری</th>
                                <th scope="col" class="px-4 py-2">
                                    مبلغ پرداختی (ریال)
                                </th>
                                <th scope="col" class="px-4 py-2">نام درگاه</th>
                                <th scope="col" class="px-4 py-2">
                                    وضعیت تراکنش
                                </th>
                                <th scope="col" class="px-4 py-2">ساعت</th>
                                <th scope="col" class="px-4 py-2">
                                    تاریخ تراکنش
                                </th>
                            </tr>
                        </thead>
                        <tbody class="whitespace-nowrap">
                            @foreach ($payments as $payment)
                            <tr class="border-b  text-black py-4">
                                <th class="text-center text-base px-6 py-4 font-medium whitespace-nowrap">
                                    {{ $payment->resnumber }}
                                </th>
                                <td scope="row" class="px-6 py-4 text-center text-base">
                                    {{ $payment->getAmount() }}
                                    ریال
                                </td>
                                <td scope="row" class="px-6 py-4 text-center text-base">
                                    {{ $payment->user->getPrivateFullName() }}
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
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
