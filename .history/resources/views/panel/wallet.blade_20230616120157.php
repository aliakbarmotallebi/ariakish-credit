@extends('layouts.user')
@section('title', 'مدیریت پیش سفارش ها')
@section('content')
    <div class="px-20 py-10">
        <div>
            <p class="mb-3">لیست تراکنش های کیف پول</p>
            <div class="card border rounded-lg overflow-hidden">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-center">
                        <thead
                            class="text-xs border-b border-b-line text-neutral-700 font-bold uppercase bg-neutral-50 whitespace-nowrap">
                            <tr>
                                <th scope="col" class="px-5 py-4">
                                    شناسه تراکنش
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    مبلغ (ریال)
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    مبلغ مانده (ریال)
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    توضیحات کوتاه
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    نوع تراکنش
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    وضعیت تراکنش
                                </th>
                                <th scope="col" class="px-5 py-4">
                                    تاریخ تراکنش
                                </th>
                            </tr>
                        </thead>
                        <tbody class="whitespace-nowrap">
                          @foreach ($wallets as $wallet)
                          <tr class="bg-white border-b hover:bg-gray-100">
                              <td scope="row" class="px-6 py-4 text-center">
                                  {{ $wallet->user->getPrivateFullName() }}
                              </td>
                              <td scope="row" class="px-6 py-4 text-center">
                                  {{ $wallet->getAmount() }}
                              </td>
                              <td scope="row" class="px-6 py-4 text-center">
                                  {{ number_format($wallet->getBalance()) }}
                              </td>
                              <td scope="row" class="px-6 py-4 text-center whitespace-nowrap">
                      {{ $wallet->summery }} 
                              </td>
                              <td scope="row" class="px-6 py-4 text-center  whitespace-nowrap">
                                  @if ($wallet->type == 'TYPE_DEPOSIT')
                                  <div class="text-green-500">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z"/></svg>
                                      واریز به کیف پول
                                  </div>
                                  @else
                                  <div class="text-rose-500">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 16.172l5.364-5.364 1.414 1.414L12 20l-7.778-7.778 1.414-1.414L11 16.172V4h2v12.172z"/></svg>                                    
                                      برداشت از کیف پول
                                  </div>                            
                                  @endif
                              </td>
                              <td class="px-6 py-4 text-center  whitespace-nowrap">
                                  @if ($wallet->status == 'STATUS_COMPLETED')
                                      <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                      تراکنش موفق
                                      </span>
                                      @else
                                      <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                  تراکنش ناموفق
                                      </span>
                                  @endif
                              </td>
                              <td scope="row" class="px-6 py-4 text-center">
                                  {{ $wallet->getCreatedAt() }}
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
