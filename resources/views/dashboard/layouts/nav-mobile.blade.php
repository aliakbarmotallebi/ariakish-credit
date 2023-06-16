<nav class="items-center flex shadow bg-white justify-between px-10 py-2 print:hidden">
    <button id="mobileMenuBtn" class="text-2xl px-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" ><path fill="none" d="M0 0h24v24H0z"/><path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z"/></svg>
    </button>
    
    <div>        
        <div class="relative inline-block" x-data="{open: false}">
            <button @click="open = !open" :class="open ? 'bg-gray-100' : '' " class="text-xl py-2 rounded px-2 hover:bg-gray-100 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" ><path fill="none" d="M0 0h24v24H0z"/><path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/></svg>
            </button>
            <div x-show="open" @click.outside="open = false" 
            class="whitespace-nowrap absolute -left-14 sm:-left-8 md:left-1 w-80 z-20 bg-white border-2 border-gray-100 rounded-md shadow-lg top-6 mt-1" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
                
                <div class="p-3 text-xs text-gray-500 border-b border-gray-100">
                    وارد شده به عنوان
                    <span class="block text-blue-700">
                        {{ auth()->user()->getPrivateFullName() }}
                    </span>
                </div>
                <div class="text-xs flex items-center w-full p-3 transition duration-200 font-bold">
                        {{ verta()->today()->format('%B %d، %Y') }}
                </div>
                <a href="" class="text-xs flex items-center w-full p-3 hover:bg-green-100 transition duration-200">
                    ویرایش پروفایل
                </a>
                <a href="{{ route('logout') }}" class="text-xs flex items-center w-full p-3 text-red-500 hover:bg-red-50 transition duration-200 border-t border-gray-100">
                    خروج
                </a>
            </div>
        </div>
    </div>
</nav>