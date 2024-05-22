<x-layout>
    @include('admin.partials.navbar')

    <section class="p-6 bg-gray-100 min-h-screen">
        <div class="container mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto">
                <h2 class="text-2xl font-bold mb-6">{{ isset($item) ? 'Edit Item' : 'Create Item' }}</h2>

                @php
                    if (isset($item)) {
                        $url = url('admin/admin-update/' . $item->id);
                    } else {
                        $url = url('admin-create');
                    }
                @endphp

                <form action="{{ $url }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @if (isset($item))
                        @method('PUT')
                    @endif

                    <!-- Item Name and Price -->
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Item Name</label>
                            <input type="text" name="name" id="name"
                                value="{{ old('name', $item->name ?? '') }}" class="mt-1 p-2 border rounded w-full">
                            @error('name')
                                <p class="my-1 text-red-500 text-sm font-medium">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" name="price" id="price"
                                value="{{ old('price', $item->price ?? '') }}" class="mt-1 p-2 border rounded w-full">
                            @error('price')
                                <p class="my-1 text-red-500 text-sm font-medium">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="w-full px-2">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" class="mt-1 p-2 border rounded w-full" rows="3">{{ old('description', $item->description ?? '') }}</textarea>
                        @error('description')
                            <p class="my-1 text-red-500 text-sm font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Size and Colour -->
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-2">
                            <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                            <input type="number" name="size" id="size"
                                value="{{ old('size', $item->size ?? '') }}" class="mt-1 p-2 border rounded w-full">
                            @error('size')
                                <p class="my-1 text-red-500 text-sm font-medium">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <label for="colour" class="block text-sm font-medium text-gray-700">Colour</label>
                            <input type="text" name="colour" id="colour"
                                value="{{ old('colour', $item->colour ?? '') }}"
                                class="mt-1 p-2 border rounded w-full">
                            @error('colour')
                                <p class="my-1 text-red-500 text-sm font-medium">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Category and Tags -->
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 px-2">
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <input type="text" name="category" id="category"
                                value="{{ old('category', $item->category ?? '') }}"
                                class="mt-1 p-2 border rounded w-full">
                            @error('category')
                                <p class="my-1 text-red-500 text-sm font-medium">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                            <input type="text" name="tags" id="tags"
                                value="{{ old('tags', $item->tags ?? '') }}" class="mt-1 p-2 border rounded w-full">
                            @error('tags')
                                <p class="my-1 text-red-500 text-sm font-medium">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="w-full px-2">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" class="mt-1 p-2 border rounded w-full"
                            accept="image/*">
                        @error('image')
                            <p class="my-1 text-red-500 text-sm font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="w-full px-2">
                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">
                            {{ isset($item) ? 'Update Item' : 'Create Item' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
