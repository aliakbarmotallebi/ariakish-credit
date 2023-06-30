<!doctype html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    @livewireStyles
    <style>
        [x-cloak] { display: none; }
      </style>
</head>
<body>
    {{ $slot }}
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