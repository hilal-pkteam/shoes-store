<x-layout>

    <!-- Navbar -->
    @include('admin.partials.navbar')

    <!-- Main content -->
    <main class="p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold my-5 mx-3">Dashboard</h1>
            @if( session('success') )
                <div class="bg-green-300 p-3 rounded-md mb-6 text-gray-800 text-md font-medium">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Card grid -->
            <div class="grid gap-6 mb-8 lg:grid-cols-3 sm:grid-cols-2">
                @foreach($items as $item)
                    <div class="max-w-sm mx-auto rounded overflow-hidden shadow-md border border-gray-300">
                        <img class="w-full h-60 object-cover" src="{{ asset($item->image) }}" alt="Sunset in the mountains" loading="lazy">
                        <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $item->name }}</div>
                        <p class="text-gray-700 text-base">
                           {{ $item->description }}
                        </p>
                        <h3 class="text-base font-bold text-gray-600 mt-2 -mb-3">RS {{ $item->price }} /- </h3>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Formated Date</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $item->colour }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</x-layout>