<x-tamu-layout>
    <section class=" dark:bg-gray-900">
        <div class="grid max-w-screen-xl gap-8 px-4 py-8 mx-auto lg:py-16 lg:grid-cols-2 lg:gap-16">
            <div class="flex flex-col justify-center">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Inventarisasi yang Mudah dan Intuitif</h1>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Aplikasi inventarisasi yang dirancang khusus untuk mempermudah pengelolaan aset Anda. Optimalkan pengelolaan aset bisnis Anda dengan aplikasi inventarisasi yang sederhana dan terjangkau.</p>
                
            </div>
            <div>
                <div class="w-full p-6 space-y-8 bg-white rounded-lg shadow-xl lg:max-w-xl sm:p-8 dark:bg-gray-800">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                        Sign in ke Akun Anda.
                    </h2>
                    @include('components.login-form')
                </div>
            </div>
        </div>
    </section>
</x-tamu-layout>