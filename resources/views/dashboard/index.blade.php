@extends('dashboard.base')

@section('title', 'صفحه اصلی پیشخوان')

@section('content')
<x-layout.header title="پنل مدیر کل">
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.49a1 1 0 0 1 .386-.79l8-6.222a1 1 0 0 1 1.228 0l8 6.222a1 1 0 0 1 .386.79V20zm-2-1V9.978l-7-5.444-7 5.444V19h14z"/></svg>
    </x-slot>
    <x-slot name="little">
        شما به عنوان مدیرکل سیستم ثبت شده اید و به تمامی بخش ها دسترسی دارید!
    </x-slot>
</x-layout.header>

<x-layout.box-report-dashboard />

<section class="mt-6 grid grid-cols-1 lg:grid-cols-12 gap-4">
    <div class="lg:col-span-12">
        <div class="bg-white p-4 rounded-md block">
            <div class="flex items-center justify-between mb-4">
                <h5 class="font-bold flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 23a7.5 7.5 0 0 0 7.5-7.5c0-.866-.23-1.697-.5-2.47-1.667 1.647-2.933 2.47-3.8 2.47 3.995-7 1.8-10-4.2-14 .5 5-2.796 7.274-4.138 8.537A7.5 7.5 0 0 0 12 23zm.71-17.765c3.241 2.75 3.257 4.887.753 9.274-.761 1.333.202 2.991 1.737 2.991.688 0 1.384-.2 2.119-.595a5.5 5.5 0 1 1-9.087-5.412c.126-.118.765-.685.793-.71.424-.38.773-.717 1.118-1.086 1.23-1.318 2.114-2.78 2.566-4.462z"/></svg>
                    آخرین رویداد های سیستم
                </h5>
            </div>
            <div class="space-y-3">
                @foreach($events as $event)
                    <div class="p-4 flex items-center bg-gray-50 rounded">
                        <span class="py-1 px-2 ml-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-500"  viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 23a7.5 7.5 0 0 0 7.5-7.5c0-.866-.23-1.697-.5-2.47-1.667 1.647-2.933 2.47-3.8 2.47 3.995-7 1.8-10-4.2-14 .5 5-2.796 7.274-4.138 8.537A7.5 7.5 0 0 0 12 23zm.71-17.765c3.241 2.75 3.257 4.887.753 9.274-.761 1.333.202 2.991 1.737 2.991.688 0 1.384-.2 2.119-.595a5.5 5.5 0 1 1-9.087-5.412c.126-.118.765-.685.793-.71.424-.38.773-.717 1.118-1.086 1.23-1.318 2.114-2.78 2.566-4.462z"/></svg>
                        </span>
                        <div>
                            <div class="card-header text-lg font-bold">
                                {{ $event->getMesaageFromEventName() }}
                                <span class="pr-1">
                                    از کاربر 
                                   {{ $event->user->getPrivateFullName() }}
                                </span>
                            </div>
                            <div class="mt-1">
                                <span class="after:content-[':']">
                                    تاریخ ایجاد رویداد
                                </span>
                                {{ verta( $event->created_at ) }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-1 text-center">
                <a href="{{ route('dashboard.events') }}" class="mt-4 block text-xs font-medium text-blue-600 hover:text-blue-400">
                    مشاهده همه
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline mr-1 fill-current w-4 h-4 leading-3" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection