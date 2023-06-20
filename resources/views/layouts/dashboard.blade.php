<!doctype html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        مدیریت سامانه
        - @yield('title')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    @livewireStyles
    <style>
        [x-cloak] { display: none; }
      </style>
</head>
<body>
    <main class="flex min-h-screen items-stretch">
        @include('dashboard.commons.sidebar')
        <section class="grow h-full">
            <header class="bg-white h-16 flex items-center justify-between px-4 md:px-8 lg:px-12 xl:px-20 border-b">
                <button id="mobileMenuBtn" class="block lg:hidden">
                    <svg class="fill-primary w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path></svg>
                </button>
                <div class="font-light text-xs sm:text-sm lg:text-base">
                    سلام
                    <span class="font-bold px-0.5">
                        {{ auth()->user()->fullname ?? NULL }}
                    </span>
                    خوش آمدید
                </div>
                <div class="mr-auto">
                    <a href="/logout" class="text-sm focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2">
                        خروج از سیستم 
                    </a>
                </div>
            </header>
            <div class="container mx-auto px-8 pt-8">
                @yield('content')
            </div>
        </section>
    </main>
    @livewireScripts
    @include('sweetalert::alert')
    @stack('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('swal', function(e) {
                Swal.fire(e.detail);
            });
        })
    </script>
</body>
</html>