@extends('layouts.user')
@section('title', 'مدیریت  پیش سفارش ها')
@section('content')
<div class="px-20 py-10">
    <div>
        <p class="mb-3">ایجاد کارت</p>
        <div class="card  border rounded-lg overflow-hidden p-5">
            <form class="grid grid-cols-3 gap-5 items-stretch" action="">
                <div>
                    <label for="role"
                        class="@error('brand_name') error-label @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        برند
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <select name="brand_name"
                        class="select2 @error('brand_name') error-input @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                        <option></option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->name }}">
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('brand_name')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div  wire:ignore>
                    <label for="role"
                        class="@error('group_name') error-label @enderror  block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        گروه
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <select id="groupName" name="group_name"
                        class="select2 @error('group_name') error-input @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                        <option></option>
                        @foreach ($groups as $group)
                            <option value="{{ $group->name }}">
                                {{ $group->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('group_name')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div  wire:ignore>
                    <label for="role"
                        class="@error('product_name') error-label @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        محصول
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <select id="productName" name="product_name" 
                        class="select2 @error('product_name') error-input @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                        <option></option>
                        @foreach ($products as $product)
                            <option value="{{ $product->name }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('product_name')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div wire:ignore>
                    <label for="role"
                        class="@error('variant_name') error-label @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        مدل
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    <select id="variantName" wire:model="variant_name" 
                        class="variant_name @error('variant_name') error-input @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                        <option></option>
                        @foreach ($variants as $variant)
                            <option value="{{ $variant->name }}">
                                {{ $variant->name }}
                            </option>
                        @endforeach
                    </select>
                  
                    @error('variant_name')
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label class="text-sm">عکس قبل از لیبل
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    @if(false)
                    <div class="w-32 h-32 mt-3 border rounded-lg overflow-hidden">
                        <img class="w-full h-full objext-cover" src="{{ asset($user->national_card_image_url) }}" srcset="">
                    </div>
                @else 
                    <label for="national_card_image_path"
                        class="mt-3 text-neutral-700  cursor-pointer border-2 border-gray-400 border-dashed px-3 py-1 transition-all duration-200 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current inline ml-1" viewBox="0 0 24 24"><path d="M1 14.5C1 12.1716 2.22429 10.1291 4.06426 8.9812C4.56469 5.044 7.92686 2 12 2C16.0731 2 19.4353 5.044 19.9357 8.9812C21.7757 10.1291 23 12.1716 23 14.5C23 17.9216 20.3562 20.7257 17 20.9811L7 21C3.64378 20.7257 1 17.9216 1 14.5ZM16.8483 18.9868C19.1817 18.8093 21 16.8561 21 14.5C21 12.927 20.1884 11.4962 18.8771 10.6781L18.0714 10.1754L17.9517 9.23338C17.5735 6.25803 15.0288 4 12 4C8.97116 4 6.42647 6.25803 6.0483 9.23338L5.92856 10.1754L5.12288 10.6781C3.81156 11.4962 3 12.927 3 14.5C3 16.8561 4.81833 18.8093 7.1517 18.9868L7.325 19H16.675L16.8483 18.9868ZM13 13V17H11V13H8L12 8L16 13H13Z"></path></svg>
                        <small>بارگذاری عکس یا فایل مربوطه</small>
                    </label>
                    <input type="file" id="national_card_image_path" name="national_card_image_path" class="hidden" />
                @endif
                @error('national_card_image_path')
                <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                    {{ $message }}
                </small>
                @enderror
                </div>
                <div class="flex flex-col">
                    <label class="text-sm">عکس بعد از لیبل
                        <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                    </label>
                    @if(false)
                    <div class="w-32 h-32 mt-3 border rounded-lg overflow-hidden">
                        <img class="w-full h-full objext-cover" src="{{ asset($user->national_card_image_url) }}" srcset="">
                    </div>
                @else 
                    <label for="national_card_image_path"
                        class="mt-3 text-neutral-700  cursor-pointer border-2 border-gray-400 border-dashed px-3 py-1 transition-all duration-200 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current inline ml-1" viewBox="0 0 24 24"><path d="M1 14.5C1 12.1716 2.22429 10.1291 4.06426 8.9812C4.56469 5.044 7.92686 2 12 2C16.0731 2 19.4353 5.044 19.9357 8.9812C21.7757 10.1291 23 12.1716 23 14.5C23 17.9216 20.3562 20.7257 17 20.9811L7 21C3.64378 20.7257 1 17.9216 1 14.5ZM16.8483 18.9868C19.1817 18.8093 21 16.8561 21 14.5C21 12.927 20.1884 11.4962 18.8771 10.6781L18.0714 10.1754L17.9517 9.23338C17.5735 6.25803 15.0288 4 12 4C8.97116 4 6.42647 6.25803 6.0483 9.23338L5.92856 10.1754L5.12288 10.6781C3.81156 11.4962 3 12.927 3 14.5C3 16.8561 4.81833 18.8093 7.1517 18.9868L7.325 19H16.675L16.8483 18.9868ZM13 13V17H11V13H8L12 8L16 13H13Z"></path></svg>
                        <small>بارگذاری عکس یا فایل مربوطه</small>
                    </label>
                    <input type="file" id="national_card_image_path" name="national_card_image_path" class="hidden" />
                @endif
                @error('national_card_image_path')
                <small class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                    {{ $message }}
                </small>
                @enderror
                </div>
                <div class="col-span-3 my-4 text-left border-t border-gray-200 py-5">
                    <button
                        type="submit"
                        class="bg-primary text-white hover:bg-primary/50 focus:ring-4 focus:outline-none focus:ring-primary/30 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        افزودن دستگاه جدید 
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div>
        <p class="mb-3 mt-6">لیست کارت ها</p>
        <div class="card  border rounded-lg overflow-hidden">
            <div class="relative overflow-x-auto">
                <table class="w-full text-center">
                    <thead class="text-sm border-b text-neutral-700 border-b-line font-bold uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-5 py-4">برند</th>
                            <th scope="col" class="px-5 py-4">گروه</th>
                            <th scope="col" class="px-5 py-4">محصول</th>
                            <th scope="col" class="px-5 py-4">مدل</th>
                            <th scope="col" class="px-5 py-4">قیمت</th>
                            <th scope="col" class="px-5 py-4">
                                عکس قبل از لیبل
                            </th>
                            <th scope="col" class="px-5 py-4">
                                عکس بعد از لیبل
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" align="center" >
                                <div class="text-neutral-500 flex flex-col justify-center items-center py-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 fill-current" viewBox="0 0 24 24"><path d="M10.9999 2.04932L11 4.06182C7.05371 4.5539 4 7.9203 4 11.9999C4 16.4182 7.58172 19.9999 12 19.9999C13.8487 19.9999 15.5509 19.3729 16.9055 18.3199L18.3289 19.7427C16.605 21.1535 14.4014 21.9999 12 21.9999C6.47715 21.9999 2 17.5228 2 11.9999C2 6.81462 5.94662 2.55109 10.9999 2.04932ZM21.9506 13C21.7509 15.011 20.9555 16.8467 19.7433 18.3282L18.3199 16.9055C19.1801 15.7989 19.756 14.4606 19.9381 12.9999L21.9506 13ZM13.0011 2.04942C17.725 2.51895 21.4815 6.27583 21.9506 10.9998L19.9381 11C19.4869 7.38156 16.6192 4.51358 13.001 4.06194L13.0011 2.04942Z"></path></svg>
                                    <div class="text-xs font-medium mt-2">
                                        هیچ اطلاعاتی وجود ندارد
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script  type="module">
    document.addEventListener('DOMContentLoaded', function() {
        $(".select2").select2({
            placeholder: 'جستجو کنید',
            width: '100%'
        });
        $(".variant_name").select2({
        placeholder: "جستجو کنید",
        width: '100%',
        ajax: {
        url: "https://portal.ariakish.com/api/variants",
        dataType: 'json',
        data: (params) => {
            return {
                name: params.term,
            }
        },
        processResults: (data, params) => {
            const results = data.map(item => {
                return {
                    id: item.name,
                    text: item.name,
                };
            });
            return {
                results: results,
            }
        },
        },
    });
    });
</script>
@endpush