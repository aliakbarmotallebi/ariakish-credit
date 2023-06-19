@extends('layouts.dashboard')
@section('title', 'مدیریت گروه ها')
@section('content')
<x-layout.header title="لیست گروه ها">
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z"/></svg>
    </x-slot>
    <x-slot name="little">
       شما در این بخش مدیریت گروه ها اعم از ایجاد و حذف و نمایش لیست انها
    </x-slot>
</x-layout.header>

<x-layout.cart title="افزدون گروه جدید" >
    <x-slot name="header" class="!p-0"></x-slot>
    <x-slot name="content">
        <form action="{{ route('dashboard.content.groups.store') }}" method="POST">
            @csrf
            <div class="flex items-center gap-3 px-8 py-4">
                <x-form.input label="نام گروه" name="name" required/>
                <button type="submit" class="mt-1 text-white bg-[#1da1f2] hover:opacity-60 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-md text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55">
                    ذخیره تغییرات
                </button>
            </div>
        </form>
    </x-slot>
</x-layout.cart>

<x-layout.cart title="لیست گروه ها" >
    <x-slot name="header" class="!p-0">
        @include('dashboard.content._tabs')
    </x-slot>
    <x-slot name="content">
        <form class="grid grid-cols-6 gap-5 p-5">   
            <div>
                <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900">
                    عنوان
                </label>
                <input type="text" name="name" autocomplete="false" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
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
        <x-layout.table>
            <x-slot name="header">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        شناسه گروه
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نام گروه
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </x-slot>
            <x-slot name="content">
                @foreach ($groups as $group)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                            {{ $group->id }}
                        </th>
                        <td scope="row" class="px-6 py-4 text-center">
                        {{ $group->name }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            @livewire('handle-status', [
                                'entity' => $group
                            ])
                        </td>                        
                        <td class="px-6 py-4 text-center">
                            <div class="flex text-center justify-end">
                                @livewire('handle-delete', [
                                    'entity' => $group,
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
        {!! $groups->links('pagination::tailwind') !!}
    </x-slot>
</x-layout.cart>

@endsection
