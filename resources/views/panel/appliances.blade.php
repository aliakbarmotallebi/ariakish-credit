@extends('layouts.user')
@section('title', 'مدیریت  پیش سفارش ها')
@section('content')
    <div class="px-20 py-10">
        <div>
            <p class="mb-3">ایجاد کارت</p>
            <div class="card  border rounded-lg overflow-hidden p-5">
                <form class="grid grid-cols-3 gap-5 items-stretch" action="#">
                    <div class="flex flex-col">
                        <label class="text-sm" for="brand">برند</label>
                        <input type="text" id="brand" name="brand"
                            class="border mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="group">گروه</label>
                        <input type="text" id="group" name="group"
                            class="border mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="product">محصول</label>
                        <input type="text" id="product" name="product"
                            class="border mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="model">مدل</label>
                        <input type="text" id="model" name="model"
                            class="border mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm">عکس قبل از لیبل</label>
                        <div
                            class="border flex items-center justify-between grow mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3">
                            <div>
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                                        fill="#CBD5E1" />
                                </svg>
                                <span class="text-sm text-darkLine">بدون تصویر</span>
                            </div>
                            <div>
                                <label for="befor-label" class="text-link cursor-pointer"><svg width="14"
                                        height="14" viewBox="0 0 14 14" class="inline" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.8333 9.33298V12.2496C12.8333 12.4043 12.7719 12.5527 12.6625 12.6621C12.5531 12.7715 12.4047 12.833 12.25 12.833H1.75C1.59529 12.833 1.44692 12.7715 1.33752 12.6621C1.22812 12.5527 1.16667 12.4043 1.16667 12.2496V9.33298H0V12.2496C0 12.7138 0.184374 13.1589 0.512563 13.4871C0.840752 13.8153 1.28587 13.9996 1.75 13.9996H12.25C12.7141 13.9996 13.1592 13.8153 13.4874 13.4871C13.8156 13.1589 14 12.7138 14 12.2496V9.33298H12.8333Z"
                                            fill="#2563EB" />
                                        <path
                                            d="M6.9807 -0.000130695C6.75098 -0.000763963 6.52339 0.0439442 6.31098 0.131431C6.09857 0.218919 5.90551 0.347465 5.74287 0.509703L3.45679 2.79579L4.28162 3.62062L6.40145 1.50137L6.41662 11.0832H7.58329L7.56812 1.50954L9.6792 3.62062L10.504 2.79579L8.21795 0.509703C8.05542 0.347483 7.86247 0.218943 7.65015 0.131454C7.43783 0.0439655 7.21034 -0.000750906 6.9807 -0.000130695Z"
                                            fill="#2563EB" />
                                    </svg>
                                    <small>بارگذاری</small></label>
                                <input type="file" id="befor-label" name="befor-label" class="hidden" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm">عکس بعد از لیبل</label>
                        <div
                            class="border flex items-center justify-between grow mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3">
                            <div class="flex items-center gap-1">
                                <div class="w-5 h-5 bg-line rounded overflow-hidden"></div>
                                <span class="text-xs text-link">img.1847895512125110237</span>
                            </div>
                            <div>
                                <label for="befor-label" class="text-link cursor-pointer"><svg width="14"
                                        height="14" viewBox="0 0 14 14" class="inline" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.8333 9.33298V12.2496C12.8333 12.4043 12.7719 12.5527 12.6625 12.6621C12.5531 12.7715 12.4047 12.833 12.25 12.833H1.75C1.59529 12.833 1.44692 12.7715 1.33752 12.6621C1.22812 12.5527 1.16667 12.4043 1.16667 12.2496V9.33298H0V12.2496C0 12.7138 0.184374 13.1589 0.512563 13.4871C0.840752 13.8153 1.28587 13.9996 1.75 13.9996H12.25C12.7141 13.9996 13.1592 13.8153 13.4874 13.4871C13.8156 13.1589 14 12.7138 14 12.2496V9.33298H12.8333Z"
                                            fill="#2563EB" />
                                        <path
                                            d="M6.9807 -0.000130695C6.75098 -0.000763963 6.52339 0.0439442 6.31098 0.131431C6.09857 0.218919 5.90551 0.347465 5.74287 0.509703L3.45679 2.79579L4.28162 3.62062L6.40145 1.50137L6.41662 11.0832H7.58329L7.56812 1.50954L9.6792 3.62062L10.504 2.79579L8.21795 0.509703C8.05542 0.347483 7.86247 0.218943 7.65015 0.131454C7.43783 0.0439655 7.21034 -0.000750906 6.9807 -0.000130695Z"
                                            fill="#2563EB" />
                                    </svg>
                                    <small>بارگذاری</small></label>
                                <input type="file" id="befor-label" name="befor-label" class="hidden" />
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3 text-left">
                        <button type="submit"
                            class="bg-primary text-white text-sm rounded-md py-1.5 px-4 hover:bg-primary/80 transition-all duration-200">
                            ایجاد کارت
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
