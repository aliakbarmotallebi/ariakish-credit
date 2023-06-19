<x-guest title="پنل مدیریت سامانه تعمیرات">
	<form method="POST">
		<section
			class="mx-auto max-w-sm text-center">
			<div class="space-y-4">
				<header class="mb-3 text-2xl font-bold">
					<span class="text-xl text-white pb-10 w-full block text-center">ورود به حساب سامانه مدیریت تعمیرات</span>
				</header>
				<div class="w-full rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400">
					<input  name="username" type="text" placeholder="نام کاربری" 
						class="my-3 w-full border-none bg-transparent outline-none focus:outline-none" />
				</div>
	
				<div class="flex w-full items-center space-x-2 rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400">
					<input name="password" type="password" placeholder="گذرواژه"
						class="my-3 w-full border-none bg-transparent outline-none text-xl" />
					<a href="#" class="font-medium text-gray-400 hover:text-gray-500 whitespace-nowrap">!بازیـابی</a>
				</div>
	
				<button
					type="submit"
					class="w-full flex justify-center rounded-2xl border-b-4 border-b-slate-600 bg-slate-500 py-3 font-bold text-white hover:bg-slate-400 active:translate-y-[0.125rem] active:border-b-slate-400">
					<span  class="mx-auto text-base font-medium" >ورود</span>
				</button>
			</div>
		</section>
</x-guest>