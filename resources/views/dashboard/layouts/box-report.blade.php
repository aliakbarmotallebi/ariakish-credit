<section class="mt-6">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
        <div class="flex items-center gap-3 bg-white p-4 rounded-md delay-200 transition-all hover:shadow shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z"></path>
            </svg>
           <div>
                <div class="card-header text-gray-700">
                    <h5>
                        کاربران 
                    </h5>
                </div>
                <div class="mt-1">
                    <h6 class="font-bold inline-block">
                        {{  $users_count }}
                    </h6>
                </div>
           </div>
        </div>

        <div class="flex items-center gap-3 bg-white p-4 rounded-md delay-200 transition-all hover:shadow shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M4 16V4H2V2h3a1 1 0 0 1 1 1v12h12.438l2-8H8V5h13.72a1 1 0 0 1 .97 1.243l-2.5 10a1 1 0 0 1-.97.757H5a1 1 0 0 1-1-1zm2 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm12 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path>
            </svg>
            <div>
                <div class="card-header text-gray-700">
                    <h5>
                        سفارشات
                    </h5>
                </div>
                <div class="mt-1">
                    <h6 class="font-bold inline-block">
                        {{ $orders_count }}
                    </h6>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3 bg-white p-4 rounded-md delay-200 transition-all hover:shadow shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 1 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0zM3 10v4h1v-4H3zm17 0v4h1v-4h-1zM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.963 7.963 0 0 1-4.24-1.215z"></path></svg>
           <div>
                <div class="card-header text-gray-700">
                    <h5>تیکت ها</h5>
                </div>
                <div class="mt-1">
                    <h6 class="font-bold inline-block">
                        {{ $tickets_count }}
                    </h6>
                </div>
           </div>
        </div>

        <div class="flex items-center gap-3 bg-white p-4 rounded-md delay-200 transition-all hover:shadow shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M11 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11 22l-5.38-3.668A6 6 0 0 1 3 13.374V5.235a1 1 0 0 1 .702-.954L11 2zm0 2.094L5 5.97v7.404a4 4 0 0 0 1.558 3.169l.189.136L11 19.58 14.782 17H10a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h7V5.97l-6-1.876zM11 12v3h9v-3h-9zm0-2h9V9h-9v1z"></path>
            </svg>
            <div> 
                <div class="card-header text-gray-700">
                    <h5>
                        پرداختی ها
                    </h5>
                </div>
                <div class="mt-1">
                    <h6 class="font-bold inline-block">
                        {{ $payments_count }}
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>