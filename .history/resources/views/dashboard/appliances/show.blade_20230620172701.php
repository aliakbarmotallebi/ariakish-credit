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
                        <th class="text-center text-base px-6 py-4 font-medium whitespace-nowrap">
                            {{ $loop->iteration }}
                        </th>
                        <td scope="row" class="px-6 py-4 text-center text-base">
                            {{ $item->brand_name  }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center text-base">
                            {{ $item->product_name }}({{ $item->variant_name }})
                        </td>
                        <td scope="row" class="px-6 py-4 text-center text-base">
                            {{ $item->group_name  }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center text-base">
                            {{ number_format($item->cost_amount) }}
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
