@extends('layouts.dashboard')
@section('title', "مدیریت درخواست ها")
@section('content')

<x-layout.cart title="لیست درخواست ها" >
    <x-slot name="header" class="!p-0"></x-slot>
    <x-slot name="content">
        <form class="grid lg:grid-cols-3 xl:grid-cols-6 gap-5 p-5">   
            <div>
                <label for="mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    شماره همراه
                </label>
                <input type="text" id="mobile" name="mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                placeholder="09121234567">
            </div>
            <div>
                <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    کد کارت
                </label>
                <input type="text" id="code" name="code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                placeholder="1234567890">
            </div>
            <div>
                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    نام و نام خانوادگی
                </label>
                <input type="text" id="fullname" name="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                placeholder="بهنام اکبری">
            </div>
            <div class="mt-7 flex">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    جستجو کن
                </button>
                <a href="{{ request()->url() }}" class="py-2.5 px-5 mr-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
                    پاک کن
                </a>
            </div>
        </form>
        <div class="w-full relative overflow-auto">
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
                        <td class="px-6 py-4 text-center">
                            <div class="flex text-center justify-end">
                                <a
                                    href="{{ route('dashboard.appliances.show', $appliance->user) }}"
                                    class="flex items-center p-2 text-gray-700 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="#323232" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.09 13.09c5.473-7.047 14.346-7.047 19.819 0"/>
                                        <path stroke="#323232" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.431 9.318a4.5 4.5 0 1 1-6.364 6.364 4.5 4.5 0 0 1 6.364-6.364"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-layout.table>
        </div>
    </x-slot>
    <x-slot name="footer" class="!p-2">
        {!! $appliances->links('pagination::tailwind') !!}
    </x-slot>
</x-layout.cart>


@endsection
