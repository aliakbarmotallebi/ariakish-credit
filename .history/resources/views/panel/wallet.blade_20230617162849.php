@extends('layouts.user')
@section('title', 'مدیریت پیش سفارش ها')
@section('content')
    <div class="px-20 py-10">
        <div class="space-y-8">
            <div class="card border rounded-lg overflow-hidden p-5">
                <section class="w-full" x-data="{price:''}">
                    <div  class="mb-2" >
                        <label class="@error('amount') error-label @enderror  block pb-2 text-sm font-medium ">
                            مبلغ به ریال
                            <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                            <span x-show="price" x-text="((price > 0) ? price.num2persian() : '') + ' ریال'" class="mr-1 text-xs text-green-700 font-semibold">
                            </span>
                        </label>
                        <input type="number" x-model.number="price" value="amount" class="@error('amount') error-input @enderror shadow-sm bg-white border  text-sm rounded-lg block w-full p-2.5
                            ">
            
                        @error('amount')
                            <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-3 gap-2 ">
                        <label class="relative">
                            <input id="box-1" type="radio" name="suggest"  x-on:click="price = 3000000" class="peer hidden">
                            <div for="box-1" class="pr-4 rounded-lg border-gray-200 border-2 peer-checked:border-blue-500 py-4 w-full text-sm font-medium text-gray-900">
                                <span class="font-semibold">
                                    {{ number_format('3000000') }}
                                        <span class="text-xs">
                                        ریال
                                        </span>
                                </span>
                            </div>
                        </label>
                        <label class="relative">
                            <input id="box-2" type="radio" name="suggest" x-on:click="price = 15000000" class="peer hidden">
                            <div for="box-2" class="pr-4 rounded-lg border-gray-200 border-2 peer-checked:border-blue-500 py-4 w-full text-sm font-medium text-gray-900>
                                <span class="font-semibold">
                                    {{ number_format('15000000') }}
                                        <span class="text-xs">
                                        ریال
                                        </span>
                                </span>
                            </div>
                        </label>
                        <label class="relative">
                            <input  id="box-3" type="radio" name="suggest" x-on:click="price = 20000000" class="peer hidden">
                            <div for="box-3" class="pr-4 rounded-lg border-gray-200 border-2 peer-checked:border-blue-500 py-4 w-full text-sm font-medium text-gray-900">
                                <span class="font-semibold">
                                    {{ number_format('20000000') }}
                                        <span class="text-xs">
                                        ریال
                                        </span>
                                </span>
                            </div>
                        </label>
                    <div class="flex items-center justify-center space-x-2 space-x-reverse pt-3 col-span-3">
                        <div>
                            <label class="relative">
                                <input type="radio" name="gateway" value="MELLAT" class="hidden peer"/>
                                <svg xmlns="http://www.w3.org/2000/svg" class="z-10 peer-checked:opacity-100 opacity-0 absolute top-1 right-1" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829-1.414 1.414L11.003 16z"/></svg>
                                <div style="background-image: url({{ asset('logos/Mellat.jpg') }});" class="border-gray-200 border-2 peer-checked:border-blue-500 rounded-lg cursor-pointer w-20 h-20 transition-all opacity-60 grayscale peer-checked:grayscale-0 bg-center bg-cover">
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="relative">
                                <input type="radio" name="gateway" value="SAMANKISH" class="hidden peer"/>
                                <svg xmlns="http://www.w3.org/2000/svg" class="z-10 peer-checked:opacity-100 opacity-0 absolute top-1 right-1" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829-1.414 1.414L11.003 16z"/></svg>
                                <div style="background-image: url({{ asset('logos/saman.png') }});" class="border-gray-200 border-2 peer-checked:border-blue-500 rounded-lg cursor-pointer w-20 h-20 transition-all opacity-60 grayscale peer-checked:grayscale-0 bg-center bg-cover"></div>
                            </label>
                        </div>
                        @error('gateway')
                            <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </section>
                <div class="mt-2 flex items-center space-x-reverse px-2 py-3 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button type="button" class="bg-primary text-white hover:bg-primary/50 focus:ring-4 focus:outline-none focus:ring-primary/30 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        ورود به درگاه پرداخت
                    </button>
                </div>
            </div>
            <p class="mb-3">لیست تراکنش های کیف پول</p>
            <div class="card border rounded-lg overflow-hidden">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-center">
                        <thead
                            class="text-xs border-b border-b-line text-neutral-700 font-bold uppercase bg-neutral-50 whitespace-nowrap">
                            <tr>
                                <th scope="col" class="px-5 py-4">
                                    شناسه تراکنش
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    مبلغ (ریال)
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    مبلغ مانده (ریال)
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    توضیحات کوتاه
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    نوع تراکنش
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    وضعیت تراکنش
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    تاریخ تراکنش
                                </th>
                            </tr>
                        </thead>
                        <tbody class="whitespace-nowrap">
                          @forelse  ($wallets as $wallet)
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td scope="row" class="px-6 py-4 text-center">
                                    {{ $wallet->id }}
                                </td>
                                <td scope="row" class="px-6 py-4 text-center">
                                    {{ $wallet->getAmount() }}
                                </td>
                                <td scope="row" class="px-6 py-4 text-center">
                                    {{ number_format($wallet->getBalance()) }}
                                </td>
                                <td scope="row" class="px-6 py-4 text-center whitespace-nowrap">
                                    {{ $wallet->summery }} 
                                </td>
                                <td scope="row" class="px-6 py-4 text-center  whitespace-nowrap">
                                    @if ($wallet->type == 'TYPE_DEPOSIT')
                                    <div class="text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z"/></svg>
                                        واریز به کیف پول
                                    </div>
                                    @else
                                    <div class="text-rose-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 16.172l5.364-5.364 1.414 1.414L12 20l-7.778-7.778 1.414-1.414L11 16.172V4h2v12.172z"/></svg>                                    
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
                          @empty
                            <tr colspan="5">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 12.5C5 12.8134 5.46101 13.3584 6.53047 13.8931C7.91405 14.5849 9.87677 15 12 15C14.1232 15 16.0859 14.5849 17.4695 13.8931C18.539 13.3584 19 12.8134 19 12.5V10.3287C17.35 11.3482 14.8273 12 12 12C9.17273 12 6.64996 11.3482 5 10.3287V12.5ZM19 15.3287C17.35 16.3482 14.8273 17 12 17C9.17273 17 6.64996 16.3482 5 15.3287V17.5C5 17.8134 5.46101 18.3584 6.53047 18.8931C7.91405 19.5849 9.87677 20 12 20C14.1232 20 16.0859 19.5849 17.4695 18.8931C18.539 18.3584 19 17.8134 19 17.5V15.3287ZM3 17.5V7.5C3 5.01472 7.02944 3 12 3C16.9706 3 21 5.01472 21 7.5V17.5C21 19.9853 16.9706 22 12 22C7.02944 22 3 19.9853 3 17.5ZM12 10C14.1232 10 16.0859 9.58492 17.4695 8.89313C18.539 8.3584 19 7.81342 19 7.5C19 7.18658 18.539 6.6416 17.4695 6.10687C16.0859 5.41508 14.1232 5 12 5C9.87677 5 7.91405 5.41508 6.53047 6.10687C5.46101 6.6416 5 7.18658 5 7.5C5 7.81342 5.46101 8.3584 6.53047 8.89313C7.91405 9.58492 9.87677 10 12 10Z"></path></svg>
                                    <div>
                                        هیچ اطلاعاتی وجود ندارد
                                    </div>
                                </div>
                            </tr>
                          @forelse 
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center items-center py-5">
              {!! $wallets->links('pagination::tailwind') !!}
             </div>
        </div>
    </div>
@endsection
