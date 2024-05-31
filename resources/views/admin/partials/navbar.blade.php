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
            <ul class="hidden md:flex space-x-4 items-center">
                <li><a href="/admin/dashboard" class="hover:underline">Dashboard</a></li>
                <li><a href="/admin/admins" class="hover:underline">Users</a></li>
                <li><a href="/admin/item-create" class="hover:underline">Create</a></li>
                <li><a href="/admin/admin-logout" class="hover:underline">Logout</a></li>
            </ul>
        </div>
        <div x-show="open" class="md:hidden">
            <ul class="flex flex-col space-y-2 mt-2">
                <li><a href="#" class="hover:underline">Dashboard</a></li>
                <li><a href="/admin/admins" class="hover:underline">Users</a></li>
                <li><a href="/admin/item/create" class="hover:underline">Create</a></li>
                <li><a href="/admin/admin-logout" class="hover:underline">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- Navbar ends -->