<x-layout>
    <!-- Navbar -->
    @include('admin.partials.navbar')

    <!-- Main content -->
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">Avatar</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">Name</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">Email</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b border-gray-200 w-20">
                                <img class="h-12 w-12 rounded-full" src="https://i.pravatar.cc/300" alt="User Avatar">
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $admin->name }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $admin->email }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $admin->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
