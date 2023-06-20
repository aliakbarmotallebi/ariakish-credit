@extends('layouts.dashboard')
@section('title', "مدیریت دستگاه ها")
@section('content')

<x-layout.cart title="لیست دستگاه ها" >
    <x-slot name="header" class="!p-0"></x-slot>
    <x-slot name="content">
        <x-layout.table>
            <x-slot name="header">
                <tr>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3">
                        نام و نام خانوادگی
                    </th>
                    <th scope="col" class="px-6 py-3">
                        شماره کارت صادر شده
                    </th>
                    <th scope="col" class="px-6 py-3">
                        شماره همراه کاربر
                    </th>
                    <th scope="col" class="px-6 py-3">
                       مجموع قیمت تعمیرات
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </x-slot>
            <x-slot name="content">
                @foreach ($appliances as $appliance)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                            {{ $appliance->id }}
                        </th>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $appliance->user->fullname }}
                        </td>     
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $appliance->user->code }}
                        </td>  
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $appliance->user->mobile }}
                        </td>  
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ number_format($appliances->sum('cost_amount')) }} تومان
                        </td>                 
                        <td class="px-6 py-4 text-center">
                            <div class="flex text-center justify-end">
                                @livewire('handle-delete', [
                                    'entity' => $appliance,
                                    'url' => request()->url()
                                ])
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-layout.table>
    </x-slot>
    <x-slot name="footer" class="!p-2">
        {!! $appliances->links('pagination::tailwind') !!}
    </x-slot>
</x-layout.cart>


@endsection
