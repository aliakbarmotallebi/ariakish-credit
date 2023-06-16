@extends('dashboard.base')
@section('title', 'ویرایش اطلاعات کاربر')
@section('content')
    <x-layout.header title=" لیست پرداختی ها">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M11 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11 22l-5.38-3.668A6 6 0 0 1 3 13.374V5.235a1 1 0 0 1 .702-.954L11 2zm0 2.094L5 5.97v7.404a4 4 0 0 0 1.558 3.169l.189.136L11 19.58 14.782 17H10a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h7V5.97l-6-1.876zM11 12v3h9v-3h-9zm0-2h9V9h-9v1z"></path>
            </svg>
        </x-slot>
        <x-slot name="little">
          لیست تمامی تراکنش های بانکی ناموفق و موفق
        </x-slot>
        <a href="{{ route('dashboard.users.index') }}" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 ml-1 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/></svg>
           بازگشت به لیست
        </a>
    </x-layout.header>

    <x-layout.cart title="کاربر" >
        <x-slot name="header" class="!p-0">
            @include('dashboard.user._tabs', [
                'user' => request()->route('user')
            ])
        </x-slot>
        <x-slot name="content">
            <x-layout.table  title="لیست پرداختی ها" >
                <x-slot name="header">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        شماره رهگیری
                        </th>
                        <th scope="col" class="px-6 py-3">
                        مبلغ پرداختی
                        <span class="text-gray-400 text-xs">
                        (ریال) 
                        </span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                        کاربر پرداخت کننده
                        </th>
                        <th scope="col" class="px-6 py-3">
                        نام درگاه
                        </th>
                        <th scope="col" class="px-6 py-3">
                        وضعیت پرداخت
                        </th>
                        <th scope="col" class="px-6 py-3">
                        ساعت
                        </th>
                        <th scope="col" class="px-6 py-3">
                        تاریخ 
                        </th>
                    </tr>
                </x-slot>
                <x-slot name="content">
                    @foreach ($payments['List'] as $payment)
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
					<tr class="bg-gray-100">
                    <th class="px-6 py-3 text-left" colspan="3">
                        مبلغ کل پرداختی ناموفق 
                        <span class="text-rose-600 text-xs mr-1">
                            {{ number_format($payments['NonPaid']) }}
                            (ریال)
                        </span>
                    </th>
                    <th class="px-6 py-3 text-right" colspan="3">
                        مبلغ کل پرداختی موفق 
                        <span class="text-green-600 text-xs mr-1">
                            {{ number_format($payments['Paid']) }}
                            (ریال)
                        </span>
                    </th>
                </tr>
                </x-slot>
            </x-layout.table>
        </x-slot>
        <x-slot name="footer" class="p-3">
            {!! $payments['List']->links('pagination::tailwind') !!}
        </x-slot>
    </x-layout.cart>
@endsection

