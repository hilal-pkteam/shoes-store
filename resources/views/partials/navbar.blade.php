

<nav class="bg-gray-800">
    <div class="flex justify-between mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

      <div class="flex h-16 items-center justify-between">

        <div class="flex items-center">
          <div class="flex-shrink-0 mr-5">
            <img class="h-14 w-14" src="{{ asset('images/shop-icon.png') }}" alt="Your Company">
          </div>

          <div class="hidden md:block">
            <div class="ml-5 flex items-baseline space-x-4">
              <a href="/" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-600" aria-current="page">Home</a>

            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-5 flex items-baseline space-x-4">
              <a href="/" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-600" aria-current="page">About</a>

            </div>
          </div>

        </div>
        
        
      </div>
      
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <a href="/" class=" block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>

        <a href="/user-guide" class=" block px-3 py-2 rounded-md text-base font-medium">Website Flow</a>

      </div>
      
    </div>
</nav>
