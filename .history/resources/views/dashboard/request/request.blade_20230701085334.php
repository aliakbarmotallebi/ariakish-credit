@extends('layouts.user')
@section('title', 'مدیریت درخواست ها')
@section('content')
    <div class="px-4 md:px-8 lg:px-12 xl:px-20 py-16">

        <div>
            <p class="mb-3 mt-6">لیست درخواست ها</p>
            <div class="card  border rounded-lg overflow-hidden">
                <div class="relative 4sm:w-[288px] 3sm:w-[343px] 2sm:w-[393px] sm:w-[608px] md:w-full  overflow-x-auto">
                    <table class="w-full text-sm text-center text-gray-500 whitespace-nowrap ">
                        <thead class="text-sm border-b text-neutral-700 border-b-line font-bold uppercase bg-gray-50">
                            <tr>
                                <th class="px-5 py-4">#</th>
                                <th class="px-5 py-4">
                                    نام و نام خانوادگی درخواست کننده
                                </th>
                                <th class="px-5 py-4">
                                    شماره همراه درخواست کننده
                                </th>
                                <th class="px-5 py-4">متن توضیحات مشکل</th>
                                <th class="px-5 py-4">تاریخ ارسال درخواست</th>
                                <th class="px-5 py-4">قیمت
                                    (تومان)
                                </th>
                                <th class="px-5 py-4"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($requests as $repair)
                                <tr class="bg-white text-xs border-b border-b-line">
                                    <th scope="row" class="px-5 py-4 font-medium whitespace-nowrap">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td class="px-5 py-4">
                                        {{ $repair->appliance->user->fullname }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ $repair->appliance->user->mobile }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ $repair->message }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ verta($repair->created_at)->format('h:s Y/m/d') }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ number_format($repair->cost_amount) ?? 0 }}
                                    </td>
                                    <td>
                                        <button
                                          class="flex items-center p-2 text-gray-700 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 focus:outline-none">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                              <path stroke="#323232" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.09 13.09c5.473-7.047 14.346-7.047 19.819 0"/>
                                              <path stroke="#323232" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.431 9.318a4.5 4.5 0 1 1-6.364 6.364 4.5 4.5 0 0 1 6.364-6.364"/>
                                          </svg>
                                      </button>
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
            <div class="flex justify-center items-center py-5">
                {!! $requests->links('pagination::tailwind') !!}
            </div>
        </div>
    </div>
@endsection
