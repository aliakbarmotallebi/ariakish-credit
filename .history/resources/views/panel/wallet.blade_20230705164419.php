@extends('layouts.user')
@section('title', 'مدیریت پیش سفارش ها')
@section('content')
    <div class="px-4 md:px-8 lg:px-12 xl:px-20 py-16">
        <div class="space-y-8">
            <form action="{{ route('user.payments.request') }}" method="POST">
                @csrf
                <div class="card border rounded-lg overflow-hidden p-5">
                    <section class="w-full">
                        <div class="text-sm font-semibold py-3 after:content-[':']">
                            یکی از تعرفه های زیر انتخاب کنید
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 ">
                            @foreach ($tariffs as $tariff)
                            <label class="relative cursor-pointer">
                                <input id="box-1" type="radio" name="amount" value="1" class="peer hidden">
                                <div for="box-1"
                                    class="text-left pl-4 rounded-lg border-gray-200 border-2 peer-checked:bg-blue-50 peer-checked:border-blue-500 py-4 w-full text-sm font-medium text-gray-900">
                                    <span class="font-semibold text-lg">
                                        {{ number_format($tariff->amount) }}
                                        <span class="text-xs">
                                            ریال
                                        </span>
                                    </span>
                                    <div
                                        class="text-right text-gray-800 text-xs font-medium px-2.5 py-0.5 before:content-['-']">
                                        معادل
                                        {{ $tariff->amount_words }}
                                        <span class="text-xs">
                                            تومان
                                        </span>
                                    </div>
                                    <div
                                        class="text-right text-xs font-medium px-2.5 py-0.5 text-neutral-500 before:content-['-']">
                                        مبلغ اعتبار در کیف پول
                                        {{ $tariff->amount_substitute }}
                                        <span class="text-xs">
                                            تومان
                                        </span>
                                    </div>
                                </div>
                            </label>
                            @endforeach
                            <div class="col-sapn-1 lg:col-span-3 ">
                                <div class="flex items-center justify-center space-x-2 space-x-reverse pt-3 col-span-3">
                                    <div>
                                        <label class="relative">
                                            <input type="radio" name="gateway" value="MELLAT" class="hidden peer" />
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="z-10 peer-checked:opacity-100 opacity-0 absolute top-1 right-1"
                                                viewBox="0 0 24 24" width="18" height="18">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829-1.414 1.414L11.003 16z" />
                                            </svg>
                                            <div style="background-image: url({{ asset('logos/Mellat.jpg') }});"
                                                class="border-gray-200 border-2 peer-checked:border-blue-500 rounded-lg cursor-pointer w-20 h-20 transition-all opacity-60 grayscale peer-checked:grayscale-0 bg-center bg-cover">
                                            </div>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="relative">
                                            <input type="radio" name="gateway" value="SAMANKISH" class="hidden peer" />
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="z-10 peer-checked:opacity-100 opacity-0 absolute top-1 right-1"
                                                viewBox="0 0 24 24" width="18" height="18">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829-1.414 1.414L11.003 16z" />
                                            </svg>
                                            <div style="background-image: url({{ asset('logos/saman.png') }});"
                                                class="border-gray-200 border-2 peer-checked:border-blue-500 rounded-lg cursor-pointer w-20 h-20 transition-all opacity-60 grayscale peer-checked:grayscale-0 bg-center bg-cover">
                                            </div>
                                        </label>
                                    </div>
                                    @error('gateway')
                                        <p class="mt-1 text-xs text-red-600 dark:text-red-500">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                    </section>
                    <div
                        class="mt-2 flex items-center space-x-reverse px-2 py-3 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button type="submit"
                            class="bg-primary text-white hover:bg-primary/50 focus:ring-4 focus:outline-none focus:ring-primary/30 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            ورود به درگاه پرداخت
                        </button>
                    </div>
                </div>
            </form>
            <p class="mb-3">لیست تراکنش های کیف پول</p>
            <div class="card border rounded-lg overflow-hidden">
                <div
                    class="relative 4sm:w-[288px] 3sm:w-[343px] 2sm:w-[393px] sm:w-[608px] md:w-full lg:w-[584px] xl:w-full  overflow-x-auto">
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
                            @forelse($wallets as $wallet)
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
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="inline fill-current w-4 h-4" viewBox="0 0 24 24">
                                                    <path
                                                        d="M11.9997 10.8284L7.04996 15.7782L5.63574 14.364L11.9997 8L18.3637 14.364L16.9495 15.7782L11.9997 10.8284Z">
                                                    </path>
                                                </svg>
                                                واریز به کیف پول
                                            </div>
                                        @else
                                            <div class="text-rose-500">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="inline fill-current w-4 h-4" viewBox="0 0 24 24">
                                                    <path
                                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                                    </path>
                                                </svg>
                                                برداشت از کیف پول
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center  whitespace-nowrap">
                                        @if ($wallet->status == 'STATUS_COMPLETED')
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                                تراکنش موفق
                                            </span>
                                        @else
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                                تراکنش ناموفق
                                            </span>
                                        @endif
                                    </td>
                                    <td scope="row" class="px-6 py-4 text-center">
                                        {{ $wallet->getCreatedAt() }}
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
                {!! $wallets->links('pagination::tailwind') !!}
            </div>
        </div>
    </div>
@endsection
