@extends('layouts.user')
@section('title', 'مدیریت پیش سفارش ها')
@section('content')
    <div class="px-4 md:px-8 lg:px-12 xl:px-20 py-16">
        @if ($appliances->count() <= 4)
            <div>
                <p class="mb-3">ایجاد کارت</p>
                <div class="card  border rounded-lg overflow-hidden p-5">
                    <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50">
                        مشتری گرامی در نظر داشته باشید کارت گارانتی درخواستی شما دو ماه پس از ارسال تصویر دستگاه با گارانتی
                        و تایید ، فعال خواهد شد.
                    </div>
                    <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                            <div class="w-full">
                                <label for="role"
                                    class="@error('brand_name') error-label @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                    برند
                                    <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                                </label>
                                <select name="brand_name"
                                    class="brands @error('brand_name') error-input @enderror  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                </select>
                                @error('brand_name')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label for="role"
                                    class="@error('group_name') error-label @enderror  block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                    گروه
                                    <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                                </label>
                                <select id="groupName" name="group_name"
                                    class="groups @error('group_name') error-input @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                </select>
                                @error('group_name')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label for="role"
                                    class="@error('product_name') error-label @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                    محصول
                                    <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                                </label>
                                <select id="productName" name="product_name"
                                    class="products @error('product_name') error-input @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                </select>
                                @error('product_name')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label for="role"
                                    class="@error('variant_name') error-label @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                    مدل
                                    <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                                </label>
                                <select id="variantName" name="variant_name"
                                    class="varians @error('variant_name') error-input @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                </select>
                                @error('variant_name')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="flex flex-col col-span-1 lg:col-span-2">
                                <label class="text-sm">عکس قبل از لیبل
                                    <span class="inline-flex bg-red-500 w-1 h-1 rounded-full"></span>
                                </label>

                                <label for="image_before_file"
                                    class="mt-3 text-neutral-700  cursor-pointer border-2 border-gray-400 border-dashed px-3 py-1 transition-all duration-200 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current inline ml-1"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M1 14.5C1 12.1716 2.22429 10.1291 4.06426 8.9812C4.56469 5.044 7.92686 2 12 2C16.0731 2 19.4353 5.044 19.9357 8.9812C21.7757 10.1291 23 12.1716 23 14.5C23 17.9216 20.3562 20.7257 17 20.9811L7 21C3.64378 20.7257 1 17.9216 1 14.5ZM16.8483 18.9868C19.1817 18.8093 21 16.8561 21 14.5C21 12.927 20.1884 11.4962 18.8771 10.6781L18.0714 10.1754L17.9517 9.23338C17.5735 6.25803 15.0288 4 12 4C8.97116 4 6.42647 6.25803 6.0483 9.23338L5.92856 10.1754L5.12288 10.6781C3.81156 11.4962 3 12.927 3 14.5C3 16.8561 4.81833 18.8093 7.1517 18.9868L7.325 19H16.675L16.8483 18.9868ZM13 13V17H11V13H8L12 8L16 13H13Z">
                                        </path>
                                    </svg>
                                    <small>بارگذاری عکس یا فایل مربوطه</small>
                                </label>
                                <input type="file" id="image_before_file" name="image_before_file" class="hidden" />
                                @error('image_before_file')
                                    <small
                                        class="text-xs -translate-y-1 bg-rose-50 text-rose-500 rounded px-2 min-h-8 font-semibold">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="col-span-3 my-4 text-left border-t border-gray-200 py-5">
                                <button type="submit"
                                    class="bg-primary text-white hover:bg-primary/50 focus:ring-4 focus:outline-none focus:ring-primary/30 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    افزودن دستگاه جدید
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endif
        <div>
            <p class="mb-3 mt-6">لیست کارت ها</p>
            <div class="card  border rounded-lg overflow-hidden">
                <div class="relative 4sm:w-[288px] 3sm:w-[343px] 2sm:w-[393px] sm:w-[608px] md:w-full  overflow-x-auto">
                    <table class="w-full text-sm text-center text-gray-500 whitespace-nowrap ">
                        <thead class="text-sm border-b text-neutral-700 border-b-line font-bold uppercase bg-gray-50">
                            <tr>
                                <th class="px-5 py-4">برند</th>
                                <th class="px-5 py-4">گروه</th>
                                <th class="px-5 py-4">محصول</th>
                                <th class="px-5 py-4">مدل</th>
                                <th class="px-5 py-4">
                                    عکس قبل از لیبل
                                </th>
                                <th class="px-5 py-4"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($appliances as $appliance)
                                <tr class="bg-white text-xs border-b border-b-line">
                                    <th scope="row" class="px-5 py-4 font-medium whitespace-nowrap">
                                        {{ $appliance->brand_name }}
                                    </th>
                                    <td class="px-5 py-4">

                                        {{ $appliance->group_name }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ $appliance->product_name }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ $appliance->variant_name }}
                                    </td>
                                    <td class="px-5 py-4">
                                        <a target="_blank" href="{{ asset($appliance->image_before_url) }}"
                                            class="text-blue-500 underline">
                                            <svg class="inline fill-current w-4 h-4 ml-1" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z" />
                                            </svg>
                                            نمایش تصویر
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2">
                                            ارسال عکس بعد از لیبل
                                        </button>
                                        <a href="{{ route('user.repair.index', $appliance) }}"
                                            class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current ml-2 inline"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 14V16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM14.5946 18.8115C14.5327 18.5511 14.5 18.2794 14.5 18C14.5 17.7207 14.5327 17.449 14.5945 17.1886L13.6029 16.6161L14.6029 14.884L15.5952 15.4569C15.9883 15.0851 16.4676 14.8034 17 14.6449V13.5H19V14.6449C19.5324 14.8034 20.0116 15.0851 20.4047 15.4569L21.3971 14.8839L22.3972 16.616L21.4055 17.1885C21.4673 17.449 21.5 17.7207 21.5 18C21.5 18.2793 21.4673 18.551 21.4055 18.8114L22.3972 19.3839L21.3972 21.116L20.4048 20.543C20.0117 20.9149 19.5325 21.1966 19.0001 21.355V22.5H17.0001V21.3551C16.4677 21.1967 15.9884 20.915 15.5953 20.5431L14.603 21.1161L13.6029 19.384L14.5946 18.8115ZM18 19.5C18.8284 19.5 19.5 18.8284 19.5 18C19.5 17.1716 18.8284 16.5 18 16.5C17.1716 16.5 16.5 17.1716 16.5 18C16.5 18.8284 17.1716 19.5 18 19.5Z">
                                                </path>
                                            </svg>
                                            درخواست تعمیر
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" align="center">
                                        <div class="text-neutral-500 flex flex-col justify-center items-center py-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 fill-current"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M10.9999 2.04932L11 4.06182C7.05371 4.5539 4 7.9203 4 11.9999C4 16.4182 7.58172 19.9999 12 19.9999C13.8487 19.9999 15.5509 19.3729 16.9055 18.3199L18.3289 19.7427C16.605 21.1535 14.4014 21.9999 12 21.9999C6.47715 21.9999 2 17.5228 2 11.9999C2 6.81462 5.94662 2.55109 10.9999 2.04932ZM21.9506 13C21.7509 15.011 20.9555 16.8467 19.7433 18.3282L18.3199 16.9055C19.1801 15.7989 19.756 14.4606 19.9381 12.9999L21.9506 13ZM13.0011 2.04942C17.725 2.51895 21.4815 6.27583 21.9506 10.9998L19.9381 11C19.4869 7.38156 16.6192 4.51358 13.001 4.06194L13.0011 2.04942Z">
                                                </path>
                                            </svg>
                                            <div class="text-xs font-medium mt-2">
                                                هیچ اطلاعاتی وجود ندارد
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse

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
        $(".brands").select2({
            placeholder: "جستجو کنید",
            width: '100%',
            ajax: {
            url: "https://portal.ariakish.com/api/brands",
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
        $(".groups").select2({
            placeholder: "جستجو کنید",
            width: '100%',
            ajax: {
            url: "https://portal.ariakish.com/api/groups",
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
        $(".products").select2({
            placeholder: "جستجو کنید",
            width: '100%',
            ajax: {
            url: "https://portal.ariakish.com/api/products",
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
        $(".varians").select2({
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
