@extends('layouts.user')
@section('title', 'مدیریت  پیش سفارش ها')
@section('content')
        <section class="px-4 md:px-8 lg:px-12 xl:px-20 py-16">
            <div class="bg-white border rounded-xl overflow-hidden">
              <div class="py-9 text-center border-b bg-gray-50">
                <h1 class="text-2xl font-medium">
                  قوانین و مقرارت
                </h1>
              </div>
              <div class="p-5">
                <div class="text-error space-y-2">
                  <p>شرايط ثبت نام براي دعوت از اساتيد جهت سخنراني</p>
                  <p>
                    پيش از تکميل فرم، حتما موارد ذيل را به دقت مطالعه بفرمائيد. در
                    صورت ناقص بودن اطلاعات درخواستي، دعوتنامه شما بررسي نخواهد شد.
                  </p>
                  <p>تمامي اطلاعات خواسته شده را به دقت تکميل نماييد.</p>
                </div>
                <div class="space-y-2 mt-2">
                  <p>
                    در قسمت هايي که بايد نشاني وارد شود، نشاني را به طور دقيق وارد
                    کنيد.
                  </p>
                  <p>
                    نماينده بايد يک شماره تلفن همراه که هميشه در دسترس باشد را در قسمت
                    مربوطه وارد نمايد.
                  </p>
                  <p>در قسمت توضيحات حتما موارد ذيل را بنويسيد :</p>
                  <p>
                    _ لزوم حضور استاد در منطقه يا شهر شما _ رزومه مجموعه و در صورت
                    برگزاري همايش هاي پيشين، توضيحاتي درباره برنامه هاي قبلي ذکر
                    نماييد.
                  </p>
                </div>
                <div class="p-5">
                  تنها در بازه زماني مشخص شده براي ثبت نام، اين قسمت از سايت، فعال
                  خواهد بود :
                  <div class="border rounded-lg max-w-md mt-4 text-sm font-light divide-y">
                    <div class="flex divide-x divide-x-reverse">
                      <div class="text-center px-2 py-5">دعوت برای فصل بهار</div>
                      <div class="text-center px-2 py-5">
                        زمان ثبت نام از 10 بهمن تا 25 بهمن
                      </div>
                    </div>
                    <div class="flex divide-x divide-x-reverse">
                      <div class="text-center px-2 py-5">دعوت برای فصل بهار</div>
                      <div class="text-center px-2 py-5">
                        زمان ثبت نام از 10 بهمن تا 25 بهمن
                      </div>
                    </div>
                    <div class="flex divide-x divide-x-reverse">
                      <div class="text-center px-2 py-5">دعوت برای فصل بهار</div>
                      <div class="text-center px-2 py-5">
                        زمان ثبت نام از 10 بهمن تا 25 بهمن
                      </div>
                    </div>
                    <div class="flex divide-x divide-x-reverse">
                      <div class="text-center px-2 py-5">دعوت برای فصل بهار</div>
                      <div class="text-center px-2 py-5">
                        زمان ثبت نام از 10 بهمن تا 25 بهمن
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-error space-y-2">
                  <p>شرايط ثبت نام براي دعوت از اساتيد جهت سخنراني</p>
                  <p>
                    پيش از تکميل فرم، حتما موارد ذيل را به دقت مطالعه بفرمائيد. در
                    صورت ناقص بودن اطلاعات درخواستي، دعوتنامه شما بررسي نخواهد شد.
                  </p>
                  <p>تمامي اطلاعات خواسته شده را به دقت تکميل نماييد.</p>
                </div>
                <div class="space-y-2 mt-2">
                  <p>
                    در قسمت هايي که بايد نشاني وارد شود، نشاني را به طور دقيق وارد
                    کنيد.
                  </p>
                  <p>
                    نماينده بايد يک شماره تلفن همراه که هميشه در دسترس باشد را در قسمت
                    مربوطه وارد نمايد.
                  </p>
                  <p>در قسمت توضيحات حتما موارد ذيل را بنويسيد :</p>
                  <p>
                    _ لزوم حضور استاد در منطقه يا شهر شما _ رزومه مجموعه و در صورت
                    برگزاري همايش هاي پيشين، توضيحاتي درباره برنامه هاي قبلي ذکر
                    نماييد.
                  </p>
                </div>
              </div>
            </div>
      
            <div class="flex flex-col items-center justify-center pt-8">
              <Checkbox title="قوانین را خواندم و قبول دارم." name="name" />
              <div>
                <Button
                  bg="bg-primary-600"
                  class="text-white rounded-lg w-full active:scale-95 will-change-transform overflow-hidden duration-100 transition-all font-medium text-sm px-4 py-3 "
                >
                  شرکت در نظرسنجی
                </Button>
              </div>
            </div>
          </section>
@endsection
