<div class="border-b border-gray-200 w-full">
    <ul class="flex whitespace-nowrap -mb-px text-sm font-medium text-center overflow-x-auto overflow-y-hidden" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <a href="{{  route('dashboard.users.edit', $user) }}" 
                @class([
                    'dashboard__tab--active' => _is_link_active('dashboard.users.edit'),
                    'inline-block p-4 border-b-2 rounded-t-lg'
                ])>
                ویرایش اطلاعات کاربر
            </a>
        </li>
        <li class="mr-2" role="presentation">
            <a href="{{  route('dashboard.users.payments', $user) }}" 
            @class([
                'dashboard__tab--active' => _is_link_active('dashboard.users.payments'),
                'inline-block p-4 border-b-2 rounded-t-lg'
            ])>
               لیست پرداختی ها
            </a>
        </li>
        <li class="mr-2" role="presentation">
            <a href="{{  route('dashboard.users.wallets', $user) }}" @class([
                'dashboard__tab--active' => _is_link_active('dashboard.users.wallets'),
                'inline-block p-4 border-b-2 rounded-t-lg'
            ])>
                لیست تراکنش های کیف پول
            </a>
        </li>
        <li role="presentation">
            <a href="{{  route('dashboard.users.tariffs', $user) }}" 
            @class([
                    'dashboard__tab--active' => _is_link_active('dashboard.users.tariffs'),
                    'inline-block p-4 border-b-2 rounded-t-lg'
                ])>
                مدیریت تعرفه ویژه
            </a>
        </li>
        <li role="presentation">
            <a href="{{  route('dashboard.users.warranties', $user) }}" 
            @class([
                    'dashboard__tab--active' => _is_link_active('dashboard.users.warranties'),
                    'inline-block p-4 border-b-2 rounded-t-lg'
                ])>
                مدیریت گارانتی ها
                ({{$user->warranties()->count()}})
            </a>
        </li>
    </ul>
</div>