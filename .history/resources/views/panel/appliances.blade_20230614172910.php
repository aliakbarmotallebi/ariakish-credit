<x-layout-user >
    <div class="px-20 py-10">
        <div>
            <p class="mb-3">ایجاد کارت</p>
            <div class="card p-5">
                <form class="grid grid-cols-3 gap-5 items-stretch" action="#">
                    <div class="flex flex-col">
                        <label class="text-sm" for="brand">برند</label>
                        <input type="text" id="brand" name="brand" class="border mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="group">گروه</label>
                        <input type="text" id="group" name="group" class="border mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="product">محصول</label>
                        <input type="text" id="product" name="product" class="border mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm" for="model">مدل</label>
                        <input type="text" id="model" name="model" class="border mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm">عکس قبل از لیبل</label>
                        <div class="border flex items-center justify-between grow mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3">
                            <div>
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                  fill="#CBD5E1"
                />
              </svg>
                                <span class="text-sm text-darkLine">بدون تصویر</span
              >
            </div>
            <div>
              <label
                for="befor-label"
                class="text-link cursor-pointer"
                ><svg
                  width="14"
                  height="14"
                  viewBox="0 0 14 14"
                  class="inline"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.8333 9.33298V12.2496C12.8333 12.4043 12.7719 12.5527 12.6625 12.6621C12.5531 12.7715 12.4047 12.833 12.25 12.833H1.75C1.59529 12.833 1.44692 12.7715 1.33752 12.6621C1.22812 12.5527 1.16667 12.4043 1.16667 12.2496V9.33298H0V12.2496C0 12.7138 0.184374 13.1589 0.512563 13.4871C0.840752 13.8153 1.28587 13.9996 1.75 13.9996H12.25C12.7141 13.9996 13.1592 13.8153 13.4874 13.4871C13.8156 13.1589 14 12.7138 14 12.2496V9.33298H12.8333Z"
                    fill="#2563EB"
                  />
                  <path
                    d="M6.9807 -0.000130695C6.75098 -0.000763963 6.52339 0.0439442 6.31098 0.131431C6.09857 0.218919 5.90551 0.347465 5.74287 0.509703L3.45679 2.79579L4.28162 3.62062L6.40145 1.50137L6.41662 11.0832H7.58329L7.56812 1.50954L9.6792 3.62062L10.504 2.79579L8.21795 0.509703C8.05542 0.347483 7.86247 0.218943 7.65015 0.131454C7.43783 0.0439655 7.21034 -0.000750906 6.9807 -0.000130695Z"
                    fill="#2563EB"
                  />
                </svg>
                <small>بارگذاری</small></label
              >
              <input
                type="file"
                id="befor-label"
                name="befor-label"
                class="hidden"
              />
            </div>
          </div>
        </div>
        <div class="flex flex-col">
          <label class="text-sm">عکس بعد از لیبل</label>
          <div
            class="border flex items-center justify-between grow mt-3 border-line rounded-md py-1 focus:outline-none focus-within:border-textMain px-3"
          >
            <div class="flex items-center gap-1">
              <div
                class="w-5 h-5 bg-line rounded overflow-hidden"
              ></div>
              <span class="text-xs text-link"
                >img.1847895512125110237</span
              >
            </div>
            <div>
              <label
                for="befor-label"
                class="text-link cursor-pointer"
                ><svg
                  width="14"
                  height="14"
                  viewBox="0 0 14 14"
                  class="inline"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.8333 9.33298V12.2496C12.8333 12.4043 12.7719 12.5527 12.6625 12.6621C12.5531 12.7715 12.4047 12.833 12.25 12.833H1.75C1.59529 12.833 1.44692 12.7715 1.33752 12.6621C1.22812 12.5527 1.16667 12.4043 1.16667 12.2496V9.33298H0V12.2496C0 12.7138 0.184374 13.1589 0.512563 13.4871C0.840752 13.8153 1.28587 13.9996 1.75 13.9996H12.25C12.7141 13.9996 13.1592 13.8153 13.4874 13.4871C13.8156 13.1589 14 12.7138 14 12.2496V9.33298H12.8333Z"
                    fill="#2563EB"
                  />
                  <path
                    d="M6.9807 -0.000130695C6.75098 -0.000763963 6.52339 0.0439442 6.31098 0.131431C6.09857 0.218919 5.90551 0.347465 5.74287 0.509703L3.45679 2.79579L4.28162 3.62062L6.40145 1.50137L6.41662 11.0832H7.58329L7.56812 1.50954L9.6792 3.62062L10.504 2.79579L8.21795 0.509703C8.05542 0.347483 7.86247 0.218943 7.65015 0.131454C7.43783 0.0439655 7.21034 -0.000750906 6.9807 -0.000130695Z"
                    fill="#2563EB"
                  />
                </svg>
                <small>بارگذاری</small></label
              >
              <input
                type="file"
                id="befor-label"
                name="befor-label"
                class="hidden"
              />
            </div>
          </div>
        </div>
        <div class="col-span-3 text-left">
          <button
            type="submit"
            class="bg-primary text-white text-sm rounded-md py-1.5 px-4 hover:bg-primary/80 transition-all duration-200"
          >
            ایجاد کارت
          </button>
        </div>
      </form>
    </div>
  </div>
  <div>
    <p class="mb-3 mt-6">لیست کارت ها</p>
    <div class="card overflow-hidden">
      <div class="relative overflow-x-auto">
        <table class="w-full text-center">
          <thead
            class="text-sm border-b border-b-line text-darkLine font-bold uppercase bg-gray-50"
          >
            <tr>
              <th scope="col" class="px-4 py-2">برند</th>
              <th scope="col" class="px-4 py-2">گروه</th>
              <th scope="col" class="px-4 py-2">محصول</th>
              <th scope="col" class="px-4 py-2">مدل</th>
              <th scope="col" class="px-4 py-2">قیمت</th>
              <th scope="col" class="px-4 py-2">
                عکس قبل از لیبل
              </th>
              <th scope="col" class="px-4 py-2">
                عکس بعد از لیبل
              </th>
            </tr>
          </thead>
          <tbody>
            <tr
              class="bg-white text-xs border-b border-b-line"
            >
              <th
                scope="row"
                class="px-4 py-2 font-medium whitespace-nowrap"
              >
                آیفون
              </th>
              <td class="px-4 py-2">کالای دیجیتال</td>
              <td class="px-4 py-2">گوشی هوشمند</td>
              <td class="px-4 py-2">14 pro max</td>
              <td class="px-4 py-2">
                <span>2,500,000</span>
                                <span>تومان</span>
                                </td>
                                <td class="px-4 py-2">
                                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                                    <span class="text-link">img.18478955110237</span
                >
              </td>
              <td class="px-4 py-2">
                <svg
                  class="inline"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                <span class="text-link"
                  >img.18478955110237</span
                >
              </td>
            </tr>
            <tr
              class="bg-white text-xs border-b border-b-line"
            >
              <th
                scope="row"
                class="px-4 py-2 font-medium whitespace-nowrap"
              >
                آیفون
              </th>
              <td class="px-4 py-2">کالای دیجیتال</td>
              <td class="px-4 py-2">گوشی هوشمند</td>
              <td class="px-4 py-2">14 pro max</td>
              <td class="px-4 py-2">
                <span>2,500,000</span>
                                    <span>تومان</span>
                                </td>
                                <td class="px-4 py-2">
                                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                                    <span class="text-link">img.18478955110237</span
                >
              </td>
              <td class="px-4 py-2">
                <svg
                  class="inline"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                <span class="text-link"
                  >img.18478955110237</span
                >
              </td>
            </tr>
            <tr
              class="bg-white text-xs border-b border-b-line"
            >
              <th
                scope="row"
                class="px-4 py-2 font-medium whitespace-nowrap"
              >
                آیفون
              </th>
              <td class="px-4 py-2">کالای دیجیتال</td>
              <td class="px-4 py-2">گوشی هوشمند</td>
              <td class="px-4 py-2">14 pro max</td>
              <td class="px-4 py-2">
                <span>2,500,000</span>
                                    <span>تومان</span>
                                </td>
                                <td class="px-4 py-2">
                                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                                    <span class="text-link">img.18478955110237</span
                >
              </td>
              <td class="px-4 py-2">
                <svg
                  class="inline"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                <span class="text-link"
                  >img.18478955110237</span
                >
              </td>
            </tr>
            <tr
              class="bg-white text-xs border-b border-b-line"
            >
              <th
                scope="row"
                class="px-4 py-2 font-medium whitespace-nowrap"
              >
                آیفون
              </th>
              <td class="px-4 py-2">کالای دیجیتال</td>
              <td class="px-4 py-2">گوشی هوشمند</td>
              <td class="px-4 py-2">14 pro max</td>
              <td class="px-4 py-2">
                <span>2,500,000</span>
                                    <span>تومان</span>
                                </td>
                                <td class="px-4 py-2">
                                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                                    <span class="text-link">img.18478955110237</span
                >
              </td>
              <td class="px-4 py-2">
                <svg
                  class="inline"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                <span class="text-link"
                  >img.18478955110237</span
                >
              </td>
            </tr>
            <tr
              class="bg-white text-xs border-b border-b-line"
            >
              <th
                scope="row"
                class="px-4 py-2 font-medium whitespace-nowrap"
              >
                آیفون
              </th>
              <td class="px-4 py-2">کالای دیجیتال</td>
              <td class="px-4 py-2">گوشی هوشمند</td>
              <td class="px-4 py-2">14 pro max</td>
              <td class="px-4 py-2">
                <span>2,500,000</span>
                                    <span>تومان</span>
                                </td>
                                <td class="px-4 py-2">
                                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                                    <span class="text-link">img.18478955110237</span
                >
              </td>
              <td class="px-4 py-2">
                <svg
                  class="inline"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                <span class="text-link"
                  >img.18478955110237</span
                >
              </td>
            </tr>
            <tr
              class="bg-white text-xs border-b border-b-line"
            >
              <th
                scope="row"
                class="px-4 py-2 font-medium whitespace-nowrap"
              >
                آیفون
              </th>
              <td class="px-4 py-2">کالای دیجیتال</td>
              <td class="px-4 py-2">گوشی هوشمند</td>
              <td class="px-4 py-2">14 pro max</td>
              <td class="px-4 py-2">
                <span>2,500,000</span>
                                    <span>تومان</span>
                                </td>
                                <td class="px-4 py-2">
                                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                                    <span class="text-link">img.18478955110237</span
                >
              </td>
              <td class="px-4 py-2">
                <svg
                  class="inline"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5L0 20H20V2.5C20 1.83696 19.7366 1.20107 19.2678 0.732233C18.7989 0.263392 18.163 0 17.5 0V0ZM2.5 1.66667H17.5C17.721 1.66667 17.933 1.75446 18.0893 1.91074C18.2455 2.06702 18.3333 2.27899 18.3333 2.5V17.155L9.2675 8.08917C8.79868 7.62049 8.16291 7.3572 7.5 7.3572C6.83709 7.3572 6.20132 7.62049 5.7325 8.08917L1.66667 12.155V2.5C1.66667 2.27899 1.75446 2.06702 1.91074 1.91074C2.06702 1.75446 2.27899 1.66667 2.5 1.66667ZM1.66667 14.5117L6.91083 9.2675C7.06711 9.11127 7.27903 9.02351 7.5 9.02351C7.72097 9.02351 7.93289 9.11127 8.08917 9.2675L17.155 18.3333H1.66667V14.5117Z"
                    fill="#CBD5E1"
                  />
                </svg>
                <span class="text-link"
                  >img.18478955110237</span
                >
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    </x-layout-user>