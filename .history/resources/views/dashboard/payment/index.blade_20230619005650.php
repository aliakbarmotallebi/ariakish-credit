@extends('layouts.dashboard')
@section('title', 'مدیریت پرداختی ها')
@section('content')

<x-layout.cart title="لیست پرداختی ها" >
    <x-slot name="header" class="!p-0 print:hidden">
        <div class="p-5 w-full">
            <form class="grid grid-cols-1  sm:grid-cols-2 xl:grid-cols-4 gap-5" method="GET">   
                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900">
                        فیلتر براساس
                    </label>
                        <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="" selected>
                                انتخاب کنید
                            </option>
                            <option value="STATUS_PAID">
                                موفق
                            </option>
                            <option value="STATUS_NONPAID">
                                ناموفق
                            </option>
                        </select>
                    </div>
                <div>
                    <label for="mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        شماره همراه
                    </label>
                    <input type="text" id="mobile" name="mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="09120102010">
                </div>
                <div>
                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        نام و نام خانوادگی
                    </label>
                    <input type="text" id="fullname" name="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="بهنام اکبری">
                </div>
                <div class="mt-7">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        جستجو کن
                    </button>
                    <a href="{{ request()->url() }}" class="py-2.5 px-5 mr-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
                        پاک کن
                    </a>
                </div>
            </form>
        </div>
    </x-slot>
    <x-slot name="content">
        <x-layout.table class="!mt-0">
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

