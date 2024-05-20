<x-layout>
    @include('admin.partials.navbar')

    <section class="p-6 bg-gray-100 min-h-screen">
        <div class="container mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto">
                <h2 class="text-2xl font-bold mb-6">Create Item</h2>
                <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <!-- Item Name and Price -->
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Item Name</label>
                            <input type="text" name="name" id="name" class="mt-1 p-2 border rounded w-full">
                            <p class="my-1 text-red-500 text-sm font-medium">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" name="price" id="price" class="mt-1 p-2 border rounded w-full">
                            <p class="my-1 text-red-500 text-sm font-medium">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="w-full px-2">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" class="mt-1 p-2 border rounded w-full" rows="3"></textarea>
                        <p class="my-1 text-red-500 text-sm font-medium">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <!-- Size and Colour -->
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-2">
                            <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                            <input type="number" name="size" id="size" class="mt-1 p-2 border rounded w-full">
                            <p class="my-1 text-red-500 text-sm font-medium">
                                @error('size')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <label for="colour" class="block text-sm font-medium text-gray-700">Colour</label>
                            <input type="text" name="colour" id="colour" class="mt-1 p-2 border rounded w-full">
                            <p class="my-1 text-red-500 text-sm font-medium">
                                @error('colour')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>
                    <!-- Category and Tags -->
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-2">
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <input type="text" name="category" id="category" class="mt-1 p-2 border rounded w-full">
                            <p class="my-1 text-red-500 text-sm font-medium">
                                @error('category')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                            <input type="text" name="tags" id="tags" class="mt-1 p-2 border rounded w-full">
                            <p class="my-1 text-red-500 text-sm font-medium">
                                @error('tags')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="w-full px-2">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" class="mt-1 p-2 border rounded w-full" accept="image/*" >
                        <p class="my-1 text-red-500 text-sm font-medium">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <!-- Submit Button -->
                    <div class="w-full px-2">
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">Create Item</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
