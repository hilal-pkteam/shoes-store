<x-layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-6 mx-auto md:h-screen lg:py-0">
            <div class="w-full max-w-2xl bg-white rounded-lg shadow dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                        Create User
                    </h1>
                    <form class="space-y-3 md:space-y-6" action="" method="post">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">User name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" value="">
                                <p class="my-1 text-red-500 text-sm font-medium">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div>
                                <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">User email</label>
                                <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" value="">
                                <p class="my-1 text-red-500 text-sm font-medium">
                                    @error('email')
                                        {{ $message}}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div>
                            <label for="address" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">User address</label>
                            <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="">
                            <p class="my-1 text-red-500 text-sm font-medium">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">User phone-no</label>
                                <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0333-4455667" value="">
                                <p class="my-1 text-red-500 text-sm font-medium">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div>
                                <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">User password</label>
                                <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••••">
                                <p class="my-1 text-red-500 text-sm font-medium">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        @if (session('error'))
                            <div class="my-1 text-red-500 text-sm font-medium">
                                {{ session('error') }}
                            </div>
                        @endif
                        <button type="submit" class="w-full bg-blue-600 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
