<x-base>
    <main class="flex min-h-screen items-stretch">
        <x-layout-user />
        <section class="grow h-full">
            <header class="bg-white h-16 flex items-center justify-between px-20">
                <div class="font-light">
                    سلام
                    <span class="font-bold px-0.5">
                        {{ auth()->user()->fullname ?? NULL }}
                    </span>
                    خوش آمدید
                </div>
                <div class="h-full w-28">
                    <img src="./assets/images/flag.png" alt="flag" />
                </div>
            </header>
            {{ $slot }}
        </section>
    </main>
</x-base>