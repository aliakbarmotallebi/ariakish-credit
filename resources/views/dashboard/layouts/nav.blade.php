<aside class="sidebar bg-white shadow min-h-[calc(100vh-52px)] py-6 fixed md:relative top-0 w-80 lg:block print:hidden">
    <div class="lg:-translate-y-[72px] bg-white">
        <header class="items-center flex mt-1 pl-7 pr-7">
            <div class="relative">
                <img class="w-10 h-10 rounded" src="{{ asset('images/logo.jpg') }}" />
            </div>
            <h1 class="text-sm font-bold leading-8 mr-2">
                پنل مدیریت آریاکیش
            </h1>
        </header>
        <nav class="mt-8 overflow-x-hidden overflow-y-auto">
            <ul class="pl-6 pt-0">
                <li class="mr-4 text-gray-500 text-xs mb-1 pt-4">منوی اصلی</li>
                <li class="space-y-1 relative">
                    <a @class([
                        'dashboard__nav--active' => _is_link_active('dashboard.index'),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M21 20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.49a1 1 0 0 1 .386-.79l8-6.222a1 1 0 0 1 1.228 0l8 6.222a1 1 0 0 1 .386.79V20zm-2-1V9.978l-7-5.444-7 5.444V19h14z" />
                        </svg>
                        پیشخوان
                    </a>
                </li>
                <li class="active">
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.users.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.users.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z" />
                        </svg> مدیریت کاربران
                        <span
                            class="bg-red-100 text-red-800 text-xs font-medium mr-auto px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                            {{ $user }}                    
                        </span>
                    </a>
                </li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.orders.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.orders.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M4 16V4H2V2h3a1 1 0 0 1 1 1v12h12.438l2-8H8V5h13.72a1 1 0 0 1 .97 1.243l-2.5 10a1 1 0 0 1-.97.757H5a1 1 0 0 1-1-1zm2 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm12 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
                        </svg> سفارشات تایید شده
                        <span
                            class="bg-red-100 text-red-800 text-xs font-medium mr-auto px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                        {{ $order }}
                        </span>

                    </a>
                </li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.carts.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.carts.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2a6 6 0 0 1 6 6v1h4v2h-1.167l-.757 9.083a1 1 0 0 1-.996.917H4.92a1 1 0 0 1-.996-.917L3.166 11H2V9h4V8a6 6 0 0 1 6-6zm6.826 9H5.173l.667 8h12.319l.667-8zM13 13v4h-2v-4h2zm-4 0v4H7v-4h2zm8 0v4h-2v-4h2zm-5-9a4 4 0 0 0-3.995 3.8L8 8v1h8V8a4 4 0 0 0-3.8-3.995L12 4z"/></svg>
                        پیش سفارشات
                        <span
                            class="bg-red-100 text-red-800 text-xs font-medium mr-auto px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                        {{ $cart }}
                        </span>

                    </a>
                </li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.tickets.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.tickets.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"  class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 1 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0zM3 10v4h1v-4H3zm17 0v4h1v-4h-1zM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.963 7.963 0 0 1-4.24-1.215z"/></svg>
                        مدیریت تیکت ها
                        <span
                            class="bg-red-100 text-red-800 text-xs font-medium mr-auto px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                        {{ $ticket }}
                        </span>
                    </a>
                </li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.contracts.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.contracts.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm6 10.5l-2.939 1.545.561-3.272-2.377-2.318 3.286-.478L18 14l1.47 2.977 3.285.478-2.377 2.318.56 3.272L18 21.5z"/></svg>
                        قرارداد ویژه
                        <span
                            class="bg-red-100 text-red-800 text-xs font-medium mr-auto px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                            {{ $vipContract }}
                        </span>
                    </a>
                </li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.tariffs.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.tariffs.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M10.9 2.1l9.899 1.415 1.414 9.9-9.192 9.192a1 1 0 0 1-1.414 0l-9.9-9.9a1 1 0 0 1 0-1.414L10.9 2.1zm.707 2.122L3.828 12l8.486 8.485 7.778-7.778-1.06-7.425-7.425-1.06zm2.12 6.364a2 2 0 1 1 2.83-2.829 2 2 0 0 1-2.83 2.829z" />
                        </svg> تعرفه کارت گارانتی
                    </a>
                </li>

                <li class="mr-4 text-gray-500 text-xs mb-1 pt-4">مالی</li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.wallets.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.wallets.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 9H4v7h16v-7zm0-4V5H4v3h16z" />
                        </svg> تراکنش های کیف پول
                    </a>
                </li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.payments.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.payments.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M11 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11 22l-5.38-3.668A6 6 0 0 1 3 13.374V5.235a1 1 0 0 1 .702-.954L11 2zm0 2.094L5 5.97v7.404a4 4 0 0 0 1.558 3.169l.189.136L11 19.58 14.782 17H10a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h7V5.97l-6-1.876zM11 12v3h9v-3h-9zm0-2h9V9h-9v1z" />
                        </svg> پرداختی ها
                    </a>
                </li>

                <li class="mr-4 text-gray-500 text-xs mb-1 pt-4">دسترسی سریع</li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.warranties.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.warranties.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM8 7h8v2H8V7zm0 4h8v2H8v-2zm0 4h8v2H8v-2z" />
                        </svg> لیست کارت گارانتی
                    </a>
                </li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.oders.index'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
                        </svg> استعلام کارت گارانتی
                    </a>
                </li>

                <li class="mr-4 text-gray-500 text-xs mb-1 pt-4">تنظیمات سیستم</li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.system.message'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{ route('dashboard.system.message') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zm-.692-2H20V5H4v13.385L5.763 17zM8 10h8v2H8v-2z" />
                        </svg>
                        اعلان پیام مدیر سیستم
                    </a>
                </li>
                <li>
                    <a @class([
                        'dashboard__nav--active' => _is_link_active(
                            'dashboard.content.brands'
                        ),
                        'mr-6 rounded-md items-center flex p-3 transition-all delay-200 hover:bg-blue-100 hover:text-blue-700',
                    ]) href="{{  route('dashboard.content.brands') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current pl-1" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M3 10H2V4.003C2 3.449 2.455 3 2.992 3h18.016A.99.99 0 0 1 22 4.003V10h-1v10.001a.996.996 0 0 1-.993.999H3.993A.996.996 0 0 1 3 20.001V10zm16 0H5v9h14v-9zM4 5v3h16V5H4zm5 7h6v2H9v-2z" />
                        </svg>
                        برند، محصولات ...
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
