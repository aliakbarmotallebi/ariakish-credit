@extends('layouts.dashboard')
@section('title', "مدیریت دستگاه ها")
@section('content')

<x-layout.cart title="لیست دستگاه ها" >
    <x-slot name="header" class="!p-0">
        
    </x-slot>
    <x-slot name="content">
        <x-layout.table>
            <x-slot name="header">
                <tr>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3">
                        نام و نام خانوادگی
                    </th>
                    <th scope="col" class="px-6 py-3">
                        اطلاعات تماس
                    </th>
                    <th scope="col" class="px-6 py-3">
                        کد ملی
                    </th>
                    <th scope="col" class="px-6 py-3">
                        شماره کارت تعمیر لوارم خانگی
                    </th>
                </tr>
            </x-slot>
            <x-slot name="content">
                @foreach ($items as $item)
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
                            {{ number_format($item->cost_amount) }} تومان
                        </td>     
                        <td scope="row" class="px-6 py-4 text-center text-base">
                            <a target="_blank" href="{{ asset($item->image_after_url) }}" class="text-blue-500 underline">
                                <svg class="inline fill-current w-4 h-4 ml-1" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                                         />
                                </svg>
                                    نمایش تصویر
                            </a>
                        </td>
                        <td scope="row" class="px-6 py-4 text-center text-base">
                            <a target="_blank" href="{{ asset($item->image_before_url) }}" class="text-blue-500 underline">
                                <svg class="inline fill-current w-4 h-4 ml-1" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                                        />
                                </svg>
                                    نمایش تصویر
                            </a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex text-center justify-end">
                                @livewire('handle-delete', [
                                    'entity' => $item,
                                    'url' => request()->url()
                                ])
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-layout.table>
        <x-layout.table>
            <x-slot name="header">
                <tr>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3">
                        اسم برند
                    </th>
                    <th scope="col" class="px-6 py-3">
                        اسم محصول(مدل)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        اسم گروه
                    </th>
                    <th scope="col" class="px-6 py-3">
                        قیمت تعمیرات
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </x-slot>
            <x-slot name="content">
                @foreach ($items as $item)
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
                            {{ number_format($item->cost_amount) }} تومان
                        </td>     
                        <td scope="row" class="px-6 py-4 text-center text-base">
                            <a target="_blank" href="{{ asset($item->image_after_url) }}" class="text-blue-500 underline">
                                <svg class="inline fill-current w-4 h-4 ml-1" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                                         />
                                </svg>
                                    نمایش تصویر
                            </a>
                        </td>
                        <td scope="row" class="px-6 py-4 text-center text-base">
                            <a target="_blank" href="{{ asset($item->image_before_url) }}" class="text-blue-500 underline">
                                <svg class="inline fill-current w-4 h-4 ml-1" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                                        />
                                </svg>
                                    نمایش تصویر
                            </a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex text-center justify-end">
                                @livewire('handle-delete', [
                                    'entity' => $item,
                                    'url' => request()->url()
                                ])
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-layout.table>
    </x-slot>
    <x-slot name="footer" class="!p-2"></x-slot>
</x-layout.cart>


@endsection
