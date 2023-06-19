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
</head>
<body>
    <main class="flex min-h-screen items-stretch">
        @include('dashboard.commons.sidebar')
        <section class="grow h-full">
            <header class="bg-white h-16 flex items-center justify-between px-20 border-b items-center">
                <div class="font-light">
                    سلام
                    <span class="font-bold px-0.5">
                        {{ auth()->user()->fullname ?? NULL }}
                    </span>
                    خوش آمدید

                    <a href="/logout" class="text-sm underline px-5 text-rose-500">
                    خروج از سیستم 
                    </a>
                </div>
            </header>
            @yield('content')
        </section>
    </main>
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