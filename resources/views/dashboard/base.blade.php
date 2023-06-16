<!doctype html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>پنل مدیریت - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles()
    @stack('styles')
</head>
<body class="bg-gray-100">
    <x-layout.nav-mobile-dashboard />
    <div class="flex space-x-5 space-x-reverse  max-w-full">
        <x-layout.nav-dashboard/>
        <main class="pt-10 pl-5 grow w-[calc(100%-20rem)]">
            @yield('content')
        </main>
    @include('sweetalert::alert')
    @livewireScripts()
    @stack('scripts')

    <script defer>
        document.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('swal',function(e){
                Swal.fire(e.detail);
            });
        });
        
        document.addEventListener('DOMContentLoaded', function () {
            jalaliDatepicker.startWatch();
            jalaliDatepicker.updateOptions({separatorChar:"-"});
        });
    </script>
</body>
</html>