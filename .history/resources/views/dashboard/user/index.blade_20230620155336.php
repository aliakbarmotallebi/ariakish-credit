@extends('layouts.dashboard')
@section('title', 'مدیریت مشتریان')
@section('content')

<x-layout.cart title="لیست کاربران ها" >
    <x-slot name="header" class="!p-0">
        <div class="p-5 w-full">
            <form class="grid grid-cols-1  sm:grid-cols-3 xl:grid-cols-4  gap-5" method="GET">   
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
        @foreach ($users as $user)
  <div class="flex-grow flex px-6 py-6 text-grey-100 justify-between items-center border-b space-x-3">
      <div class="whitespace-nowrap flex items-center max-w-xs w-full">
          <div class="rounded-full bg-gray-100 pl-4 inline-flex items-center ">
              <div
                    @class([
                        'items-center bg-blue-800 text-xl inline-block h-12 w-12 rounded-full uppercase text-white text-center align-middle leading-loose',
                        '!bg-green-800' => $user->isConfirmedUser(),
                        '!bg-red-800' => !$user->isConfirmedUser(),
                    ])>
                  <span class="inline-flex items-center justify-center text-xs font-semibold">
                    {{ $user->id }}
                  </span>
              </div>
              <span class="text-lg mr-2 uppercase truncate">
                  {{ $user->fullname ?? 'ثبت نام کامل نشده' }}
              </span>
          </div>
      </div>
      <div class="px-4 whitespace-nowrap">
        <div class="text-right">
            <span class="text-gray-400 text-xs block">
                کد کارت
            </span>
            {{ $user->code }}
        </div>
    </div>
      <div class="px-4 whitespace-nowrap">
          <div class="text-right">
              <span class="text-gray-400 text-xs block">
                  تلفن همراه
              </span>
              {{ $user->mobile }}
          </div>
      </div>
      <div class="px-4 whitespace-nowrap">
          <div class="text-right truncate">
              <span class="text-gray-400 text-xs block">
                  کد ملی
              </span>
              {{ $user->national_id_number }}
          </div>
      </div>
      <div class="px-4 whitespace-nowrap">
        <div class="text-right truncate">
            <span class="text-gray-400 text-xs block">
               وضعیت کاربر
            </span>
            @if ($user->isConfirmedUser())
            <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                تایید شده
            </span>
            @elseif(!$user->isConfirmedUser())
            <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                عدم تایید
            </span>
            @elseif($user->isProfileCompleted())
                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                    درانتظار بررسی
                </span>
            @endif
        </div>
    </div>
      <div class="flex text-center gap-x-1 mr-auto justify-self-end">
          <button
          type="button"
          x-data="{}"
          x-on:click="window.livewire.emitTo('modal.wallet-balance-dashboard', 'show', {{ $user->id }})"
              class="flex items-center p-2 text-gray-700 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
              <div class="font-medium whitespace-nowrap">
                {{ number_format($user->balance()) }}
                  <span class="text-xs text-gray-400">
                      (تومان)
                  </span>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 fill-current" viewBox="0 0 24 24" width="20"
                  height="20">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                      d="M18 7h3a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h15v4zM4 9v10h16V9H4zm0-4v2h12V5H4zm11 8h3v2h-3v-2z" />
              </svg>
          </button>
          <button
          x-data="{}"
          x-on:click="window.livewire.emitTo('modal.modal-user-info', 'show', {{ $user->id }})"
            class="flex items-center p-2 text-gray-700 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="#323232" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.09 13.09c5.473-7.047 14.346-7.047 19.819 0"/>
                <path stroke="#323232" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.431 9.318a4.5 4.5 0 1 1-6.364 6.364 4.5 4.5 0 0 1 6.364-6.364"/>
            </svg>
        </button>
        @livewire('handle-status', [
            'entity' => $user
        ])
      </div>
  </div>
  @endforeach
    </x-slot>
    <x-slot name="footer" class="!p-2">
        {!! $users->links('pagination::tailwind') !!}
    </x-slot>
    @livewire('modal.modal-user-info')
    @livewire('modal.wallet-balance-dashboard')
</x-layout.cart>
@endsection

