@extends('dashboard.base')
@section('title', 'مدیریت مشتریان')
@section('content')
<x-layout.header title="لیست مشتریان">
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z"/></svg>
    </x-slot>
    <x-slot name="little">
        شما در این بخش مدیریت مشتریان، افزدون و کسر از کیف پول
    </x-slot>
</x-layout.header>
@livewire('modals.message-from-admin')
<x-layout.cart title="لیست کاربران ها" >
    <x-slot name="header" class="!p-0">
        <div class="p-5 w-full">
            <form class="grid grid-cols-1  sm:grid-cols-3 xl:grid-cols-4  gap-5" method="GET">   
                <div>
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">
                    فیلتر براساس
                </label>
                    <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" selected>
                            انتخاب کنید
                        </option>
                        <option value="STATUS_CONFIRMED">
                            فعال
                        </option>
                        <option value="STATUS_UNCONFIRMED">
                            غیرفعال
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
                    <label for="contract_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        شماره قرارداد
                    </label>
                    <input type="text" id="contract_number" name="contract_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="10120120103546">
                </div>
                <div>
                    <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        نام و نام خانوادگی
                    </label>
                    <input type="text" id="fullname" name="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="بهنام اکبری">
                </div>
                <div>
                    <label for="shop_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        نام فروشگاه
                    </label>
                    <input type="text" id="shop_name" name="shop_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="دیجی کالا">
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
        <x-layout.table>
            <x-slot name="header">
                <tr>
				    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        شماره تماس
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نام و نام خانوادگی
                    </th>
                    <th scope="col" class="px-6 py-3">
                        کیف پول
                        <span class="text-gray-400 text-xs">
                            (ریال)
                        </span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                       نام فروشگاه
                    </th>
                    <th scope="col" class="px-6 py-3">
                        کد احراز
                     </th>
                    <th scope="col" class="px-6 py-3">
                        تاریخ ثبت نام
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نقش کاربر
                        </th>
                    <th scope="col" class="px-6 py-3">
                        وضعیت
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </x-slot>
            <x-slot name="content">
                @foreach ($users as $user)
                    <tr class="bg-white border-b hover:bg-gray-100">
						<td scope="row" class="px-6 py-4 text-center">
							{{ $user->id }}
                        </td>
						<th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                            <a href="{{ route('dashboard.users.edit', $user) }}" class="text-blue-400 underline">
                                {{ $user->mobile }}
                            </a>
                        </th>
                        <td scope="row" class="px-6 py-4 text-center">
                        {{ $user->getPrivateFullName() }}
                        @if ($user->isAwaitingConfirmation())
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline ml-1 fill-current" width="14" height="14"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z" fill="#000"></path></svg>
                                درانتظارتایید    
                            </span>
                        @endif
                        </td>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ number_format($user->balance()) }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $user->getShopName() }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $user->verify_code }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $user->getCreatedAt() }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-center">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                            {{ $user->getRoleName() }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center">
                        @livewire('handle-status', [
                            'entity' => $user
                        ])
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex text-center justify-end">
                                <button
                                    type="button"
                                    x-data="{}"
                                    x-on:click="window.livewire.emitTo('modals.message-from-admin', 'show', {{$user->getDataMessageFormAdmin()}})"
                                    class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/></svg>
                                </button>

                                <a href="{{ route('dashboard.users.edit', $user) }}"  class="ml-1 flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M8.686 4l2.607-2.607a1 1 0 0 1 1.414 0L15.314 4H19a1 1 0 0 1 1 1v3.686l2.607 2.607a1 1 0 0 1 0 1.414L20 15.314V19a1 1 0 0 1-1 1h-3.686l-2.607 2.607a1 1 0 0 1-1.414 0L8.686 20H5a1 1 0 0 1-1-1v-3.686l-2.607-2.607a1 1 0 0 1 0-1.414L4 8.686V5a1 1 0 0 1 1-1h3.686zM6 6v3.515L3.515 12 6 14.485V18h3.515L12 20.485 14.485 18H18v-3.515L20.485 12 18 9.515V6h-3.515L12 3.515 9.515 6H6zm6 10a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-layout.table>
    </x-slot>
    <x-slot name="footer" class="!p-2">
        {!! $users->links('pagination::tailwind') !!}
    </x-slot>
</x-layout.cart>
@endsection

