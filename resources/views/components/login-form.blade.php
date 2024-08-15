<form class="mt-8 space-y-6" form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@company.com" required />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input id="remember_me" aria-describedby="remember_me" name="remember_me" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
        </div>
        <div class="text-sm ms-3">
        <label for="remember_me" class="font-medium text-gray-500 ">Ingat saya</label>
        </div>

        @if (Route::has('password.request'))
        <a href="href="{{ route('password.request') }}" class="text-sm font-medium text-blue-600 ms-auto hover:underline dark:text-blue-500">Lupa password?</a>
        @endif
        
    </div>
    <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
    <div class="text-sm font-medium text-gray-900 dark:text-white">
        Belum terdaftar? <a class="text-blue-600 hover:underline dark:text-blue-500" href="{{ route('register') }}">Buat akun</a>
    </div>
</form>