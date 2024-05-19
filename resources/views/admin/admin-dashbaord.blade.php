<x-layout>

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white px-6 py-2.5">
        <div class="flex justify-between items-center">
            <div class="text-xl font-semibold">Logo</div>
            <div x-data="{ open: false }" class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden md:flex space-x-4">
                <li><a href="#" class="hover:underline">Dashboard</a></li>
                <li><a href="#" class="hover:underline">Profile</a></li>
                <li><a href="#" class="hover:underline">Settings</a></li>
                <li><a href="#" class="hover:underline">Logout</a></li>
            </ul>
        </div>
        <div x-show="open" class="md:hidden">
            <ul class="flex flex-col space-y-2 mt-2">
                <li><a href="#" class="hover:underline">Dashboard</a></li>
                <li><a href="#" class="hover:underline">Profile</a></li>
                <li><a href="#" class="hover:underline">Settings</a></li>
                <li><a href="#" class="hover:underline">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold mb-6">Dashboard</h1>

            <!-- Card grid -->
            <div class="grid gap-6 mb-8 lg:grid-cols-3 sm:grid-cols-2">
            <!-- Card 1 -->
            <div class="p-4 bg-white rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                <p class="text-gray-600">Card content goes here.</p>
            </div>
            <!-- Card 2 -->
            <div class="p-4 bg-white rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Card Title 2</h2>
                <p class="text-gray-600">Card content goes here.</p>
            </div>
            <!-- Card 3 -->
            <div class="p-4 bg-white rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Card Title 3</h2>
                <p class="text-gray-600">Card content goes here.</p>
            </div>
            </div>
        </div>
    </main>

</x-layout>