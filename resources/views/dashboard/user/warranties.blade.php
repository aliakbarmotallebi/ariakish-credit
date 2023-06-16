@extends('dashboard.base')
@section('title', 'ویرایش اطلاعات کاربر')
@section('content')
    
    @livewire('modals.wallet-balance-dashboard')
    
    <x-layout.header title="لیست گارانتی ها">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M11 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11 22l-5.38-3.668A6 6 0 0 1 3 13.374V5.235a1 1 0 0 1 .702-.954L11 2zm0 2.094L5 5.97v7.404a4 4 0 0 0 1.558 3.169l.189.136L11 19.58 14.782 17H10a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h7V5.97l-6-1.876zM11 12v3h9v-3h-9zm0-2h9V9h-9v1z"></path>
            </svg>
        </x-slot>
        <x-slot name="little">
     دراین بخش لیست تمامی گارانتی های ثبت شده می باشد
        </x-slot>
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
                        <th scope="col" class="px-6 py-3">
                        شماره سریال
                        </th>
                        <th scope="col" class="px-6 py-3">
                        شناسه سفارش
                        </th>
                        <th scope="col" class="px-6 py-3">
                           برند
                        </th>
                        <th scope="col" class="px-6 py-3">
                        محصول
                        </th>
                        <th scope="col" class="px-6 py-3">
                        مدل
                        </th>
                        <th scope="col" class="px-6 py-3">
                        تاریخ ایجاد
                        </th>
                        <th scope="col" class="px-6 py-3">
                        تاریخ انقضا
                        </th>
                        <th scope="col" class="px-6 py-3"></th>
                    </tr>
                </x-slot>
                <x-slot name="content">
                    @foreach ($warranties as $warranty)
                        <tr class="border-b  text-black py-4">
                            <th class="text-center text-base px-6 py-4 font-medium whitespace-nowrap">
                                {{ $warranty->serial_number }}
                            </th>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                <a class="underline text-blue-500" href="{{ route('dashboard.orders.show', $warranty->item->order_id) }}" >
                                    {{ $warranty->order_item_id }}
                                </a>
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                {{ $warranty->brand_name }}
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                {{ $warranty->product_name }}
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                {{ $warranty->group_name }}
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                {{ verta($warranty->start_date)->format('Y-m-d') }}
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                {{ verta($warranty->expire_date)->format('Y-m-d')  }}
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                @livewire('handle-status', [
                                    'entity' => $warranty
                                ], key($warranty->id))
                            </td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-layout.table>
        </x-slot>
        <x-slot name="footer" class="p-3">
            {!! $warranties->links('pagination::tailwind') !!}
        </x-slot>
    </x-layout.cart>
@endsection

