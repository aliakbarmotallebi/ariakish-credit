<x-modal title="شماره کاربر  ({{ $user->id ?? NULL }})" wire:model="show" class="!p-0">
    @if($user)
    <table class="w-full text-sm text-left text-gray-500">
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    نا و نام خانوادگی
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    {{ $user->fullname ?? NULL }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                   کد کارت تعمیر
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    {{ $user->code  }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    تلفن همراه
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    {{ $user->mobile }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    تلفن همراه دوم
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    {{ $user->mobile_second }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    تلفن ثابت
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    {{ $user->tel }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    کد ملی
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    {{ $user->national_id_number  }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    تصویر کارت ملی
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    @if($user->national_card_image_url)
                    <a href="{{ asset($user->national_card_image_url) }}" class="text-blue-500 underline">
                        (دانلود فایل)
                    </a>
                    @endif
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    کدپستی
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    {{ $user->postal_code }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    آدرس سکونت
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    {{ $user->address }}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-right">
                    وضعیت کاربر
                </th>
                <td class="px-6 py-4 text-right whitespace-nowrap">
                    @if ($user->status == 'STATUS_CONFIRMED')
                        <span class="text-green-800 text-xs font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                            کاربر تایید شده
                        </span>
                    @else
                        <span class="text-red-800 text-xs font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                            عدم تایید کاربر
                        </span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    @endif
    <x-slot name="footer"></x-slot>
</x-modal>
  