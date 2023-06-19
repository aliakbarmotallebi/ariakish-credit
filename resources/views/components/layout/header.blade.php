@props([
    'little' => NULL,
    'icon'  => NULL
])

<header class="flex justify-between items-center w-full flex-col md:flex-row">
    <div class="flex items-center">
        {{ $icon }}
        <div class="mr-5">
            <h4 class="font-bold">
                {{ $title }}
            </h4>
            <small class="text-gray-500">
                {{ $little }}
            </small>
        </div>
    </div>
    <div class="block py-2">
        {{ $slot }}
    </div>
</header>