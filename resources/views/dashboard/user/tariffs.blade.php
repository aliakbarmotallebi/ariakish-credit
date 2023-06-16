@extends('dashboard.base')
@section('title', 'ویرایش اطلاعات کاربر')
@section('content')

    <x-layout.header title="ویرایش اطلاعات کابر">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z"/></svg>
        </x-slot>
        <x-slot name="little">
           لیست تمامی تعرفه های ویژه منتسب به کاربر
        </x-slot>
        <a href="{{ route('dashboard.users.index') }}" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 ml-1 fill-current"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/></svg>
           بازگشت به لیست
        </a>
    </x-layout.header>
    <x-layout.cart title="افزدون تعرفه جدید" >
        <x-slot name="header" class="!p-0"></x-slot>
        <x-slot name="content">
            <form action="{{ route('dashboard.users.tariffs.store', $user) }}" method="post">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 lg:grid-cols-3 px-8 py-4 gap-2">
                    <div x-data="{price:''}" 
                        class="mb-4">
                        <label class="@error('min') error-label @enderror  block pb-2 text-sm font-medium ">
                            حداقل قیمت
                            <span class="text-xs text-gray-400">
                                ریال
                            </span>
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input x-model.number="price" type="number" name="min"
                            class="@error('min') error-input @enderror price shadow-sm bg-white border  text-sm rounded-lg block w-full p-2.5">
                        <span x-show="price" x-text="((price > 0) ? price.num2persian() : '') + ' ریال'" class="text-xs text-green-700 font-semibold">
                        </span>
                        @error('min')
                            <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div x-data="{price:''}" 
                        class="mb-4">
                        <label class="@error('max') error-label @enderror  block pb-2 text-sm font-medium ">
                            حداکثر قیمت
                            <span class="text-xs text-gray-400">
                                ریال
                            </span>
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input x-model.number="price" type="number" name="max"
                            class="@error('max') error-input @enderror price shadow-sm bg-white border  text-sm rounded-lg block w-full p-2.5">
                        <span x-show="price" x-text="((price > 0) ? price.num2persian() : '') + ' ریال'" class="text-xs text-green-700 font-semibold">
                        </span>
                        @error('max')
                            <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div x-data="{price:''}" 
                        class="mb-4">
                        <label class="@error('value') error-label @enderror  block pb-2 text-sm font-medium ">
                            قیمت محاسبه
                            <span class="text-xs text-gray-400">
                                ریال
                            </span>
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <input x-model.number="price" type="text" name="value"
                            class="@error('value') error-input @enderror price shadow-sm bg-white border  text-sm rounded-lg block w-full p-2.5">
                        <span x-show="price" x-text="((price > 0) ? price.num2persian() : '') + ' ریال'" class="text-xs text-green-700 font-semibold">
                        </span>
                        @error('value')
                            <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">
                        دوره
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <select id="role" name="warranty_period" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 mb-4">
                            @foreach (\App\Models\Tariff::$WARRANTY_PERIODS_FA as $index => $period)
                                <option value="{{ $index }}">
                                    {{  $period }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">
                            نوع محاسبه
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                        </label>
                        <select id="role" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 mb-4">
                            <option value="AMOUNT">ریال</option>
                            <option value="PERCENT">درصد</option>
                        </select>
                    </div>
                    
                </div>
                <div class="px-8 py-4">
                    <button type="submit" class="text-center text-white bg-[#1da1f2] hover:opacity-60 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-md text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mb-2">
                        ذخیره تغییرات
                    </button>
                </div>
            </form>
        </x-slot>
    </x-layout.cart>
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
                            حداقل قیمت
                            <span class="text-gray-400 text-xs">
                                (ریال)
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            حداکثر قیمت
                            <span class="text-gray-400 text-xs">
                                (ریال)
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            قیمت محاسبه	
                        </th>
                        <th scope="col" class="px-6 py-3">
                            مدت دوره	
                        </th>
                        <th scope="col" class="px-6 py-3">
                            نوع محاسبه	
                        </th>
                        <th scope="col" class="px-6 py-3"></th>
                    </tr>
                </x-slot>
                <x-slot name="content">
                    @foreach ($tariffs as $tariff)
                        <tr class="border-b  text-black py-4">
                            <th class="text-center text-base px-6 py-4 font-medium whitespace-nowrap">
                                {{ $tariff->min }}
                                ریال
                            </th>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                {{ $tariff->max }}
                                ریال
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                {{ $tariff->value }}
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-medium">
                                {{ $tariff->getLabelPeriod() }}
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                @if ($tariff->type == 'AMOUNT')
                                <div class="font-medium">
                                    ریال
                                </div>
                                @else
                                <div class="font-medium">
                                  درصد
                                </div>                            
                                @endif
                            </td>
                            <td scope="row" class="px-6 py-4 text-center text-base">
                                <div class="flex items-center">
                                    @livewire('handle-delete', [
                                        'entity' => $tariff,
                                        'url' => request()->url()
                                    ])
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-layout.table>
        </x-slot>
    </x-layout.cart>
@endsection

