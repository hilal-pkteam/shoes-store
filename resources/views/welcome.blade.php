<x-layout>

@include('partials.navbar')
{{-- <form action="/search" method="POST" class="flex items-center my-5 mx-7">
    <div class="relative w-full">
        <input type="text" id="simple-search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Quality Laptops" required="">
    </div>
    <button type="submit" name="search-button" class="px-6 py-2 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Search</span>
    </button>
  </form> --}}

@include('partials.hero')

  <h1 class="text-2xl text-center sm:text-3xl lg:text-4xl xl:text-5xl font-medium text-zinc-900">Fresh Items</h1>
  <br><br><br><br>

  <!-- Cards -->
  <section class="grid grid-cols-1 mx-auto gap-3 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 max-w-7xl sm:mx-5">

    @foreach($items as $item)
    <div class="max-w-sm mx-auto rounded overflow-hidden shadow-md cursor-pointer border border-gray-300">
        <img class="w-full h-60 object-cover" src="{{ asset($item->image) }}" alt="Sunset in the mountains" loading="lazy">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $item->name }}</div>
        <p class="text-gray-700 text-base">
            {{ $item->description }}
        </p>
        <h3 class="text-base font-bold text-gray-600 mt-2 -mb-3">RS 44444</h3>
        </div>
        <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Formated Date</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $item->colour }}</span>
        </div>
    </div>
    @endforeach

  </section>
  @include('partials.footer')

</x-layout>
