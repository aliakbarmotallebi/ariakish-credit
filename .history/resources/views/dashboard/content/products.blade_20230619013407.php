@extends('layouts.dashboard')
@section('title', 'مدیریت محصولات ها')
@section('content')
<x-layout.cart title="افزدون محصول جدید" >
    <x-slot name="header" class="!p-0"></x-slot>
    <x-slot name="content">
        <form action="{{ route('dashboard.content.products.store') }}" method="POST">
            @csrf
            <div class="flex items-center gap-3 px-8 py-4">
                <x-form.input label="نام محصول" name="name" required/>
                <button type="submit" class="mt-1 text-white bg-[#1da1f2] hover:opacity-60 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-md text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55">
                    ذخیره تغییرات
                </button>
            </div>
        </form>
    </x-slot>
</x-layout.cart>

<x-layout.cart title="لیست محصولات ها" >
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
                        شناسه محصول
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نام محصول
                    </th>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </x-slot>
            <x-slot name="content">
                @foreach ($products as $product)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <th class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                            {{ $product->id }}
                        </th>
                        <td scope="row" class="px-6 py-4 text-center">
                            {{ $product->name}}
                        </td>  
                        <td class="px-6 py-4 text-center">
                            @livewire('handle-status', [
                                'entity' => $product
                            ])
                        </td>                     
                        <td class="px-6 py-4 text-center">
                            <div class="flex text-center justify-end">
                                @livewire('handle-delete', [
                                    'entity' => $product,
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
        {!! $products->links('pagination::tailwind') !!}
    </x-slot>
</x-layout.cart>


@endsection
