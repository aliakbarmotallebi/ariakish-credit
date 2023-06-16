@extends('dashboard.base')
@section('title', 'ویرایش اطلاعات کاربر')
@section('content')
    
    @livewire('modals.wallet-balance-dashboard')
    
    <x-layout.header title="ویرایش اطلاعات کابر">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24"
                width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                    d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 9H4v7h16v-7zm0-4V5H4v3h16z" />
            </svg>
        </x-slot>
        <x-slot name="little">
           لیست تمامی تراکنش های برداشت و پرداختی کاربر
        </x-slot>
        <button
            type="button"
            x-data="{}"
            x-on:click="window.livewire.emitTo('modals.wallet-balance-dashboard', 'show', {{ $user->id }})"
            class="text-gray-900 hover:bg-gray-100 bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4 ml-1 fill-current" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11.95 7.95l-1.414 1.414L8 6.828 8 20H6V6.828L3.465 9.364 2.05 7.95 7 3l4.95 4.95zm10 8.1L17 21l-4.95-4.95 1.414-1.414 2.537 2.536L16 4h2v13.172l2.536-2.536 1.414 1.414z"/></svg>
            افزایش و کسر از اعتبار 
        </button>
    </x-layout.header>
   <x-layout.cart title="کاربر" >
        <x-slot name="header" class="!p-0">
            @include('dashboard.user._tabs', [
                'user' => request()->route('user')
            ])
        </x-slot>
        <x-slot name="content">
            <x-layout.table class="!mt-0">
                <x-slot name="header">
                    <tr>
                        <th scope="col" class="px-6 py-3  whitespace-nowrap">
                        کاربر ایجاد کننده
                        </th>
                        <th scope="col" class="px-6 py-3  whitespace-nowrap">
                        مبلغ
                        <span class="text-gray-400 text-xs">
                        (ریال) 
                        </span>
                        </th>
                        <th scope="col" class="px-6 py-3  whitespace-nowrap">
                        مبلغ مانده
                        <span class="text-gray-400 text-xs">
                        (ریال) 
                        </span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            پیام مدیریت
                        </th>
                        <th scope="col" class="px-6 py-3">
                        توضیحات کوتاه
                        </th>
                        <th scope="col" class="px-6 py-3">
                        نوع تراکنش
                        </th>
                        <th scope="col" class="px-6 py-3">
                        وضعیت تراکنش
                        </th>
                        <th scope="col" class="px-6 py-3">
                        تاریخ تراکنش
                        </th>
                    </tr>
                </x-slot>
                <x-slot name="content">
                    @foreach ($wallets['List'] as $wallet)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $wallet->user->getPrivateFullName() }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $wallet->getAmount() }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ number_format($wallet->getBalance()) }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center whitespace-nowrap">
                            {{ $wallet->message_form_admin }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center whitespace-nowrap">
                            {{ $wallet->summery }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center  whitespace-nowrap">
                            @if ($wallet->type == $wallet::TYPE_DEPOSIT)
                                <div class="text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z"/></svg>
                                    واریز به کیف پول
                                </div>
                            @elseif ($wallet->type == $wallet::TYPE_WITHDRAW)
                                <div class="text-rose-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 16.172l5.364-5.364 1.414 1.414L12 20l-7.778-7.778 1.414-1.414L11 16.172V4h2v12.172z"/></svg>               
                                    برداشت از کیف پول
                                </div>                            
                            @endif
                        </td>
                        <td class="px-6 py-4 text-center  whitespace-nowrap">
                            @if ($wallet->status == 'STATUS_COMPLETED')
                                <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                تراکنش موفق
                                </span>
                                @else
                                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                            تراکنش ناموفق
                                </span>
                            @endif
                        </td>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $wallet->getCreatedAt() }}
                        </td>
                    </tr>
                    @endforeach
					<tr class="bg-gray-100">
                    <th class="px-6 py-3 text-left" colspan="3">
                                            برداشت از کیف پول
                 
                        <span class="text-rose-600 text-xs mr-1">
                            {{ number_format($wallets['Withdraw'])}}
                            (ریال)
                        </span>
                    </th>
                    <th class="px-6 py-3 text-right" colspan="4">
    واریز به کیف پول     
    <span class="text-green-600 text-xs mr-1">
                            {{ number_format($wallets['Deposit']) }}
                            (ریال)
                        </span>
                    </th>
                </tr>
                </x-slot>
            </x-layout.table>
        </x-slot>
        <x-slot name="footer" class="p-3">
            {!! $wallets['List']->links('pagination::tailwind') !!}
        </x-slot>
    </x-layout.cart>
@endsection

