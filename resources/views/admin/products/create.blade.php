<x-admin-layout>
    <div class="max-w-2xl mx-auto bg-slate-300 px-8  rounded-lg shadow-lg h-screen py-5">
        <h1 class="text-center font-semibold text-3xl mb-4">Create Product</h1>
        <p class="text-center mb-2 italic text-gray-600">Please fill out the form below</p>

        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-5">

                <!-- Product Name -->
                <x-input name="name" label="Product Name" type="text" value="{{ $product->name ?? '' }}" />

                <!-- Product Price -->
                <x-input name="price" label="Product Price" type="number" value="{{ $product->price ?? '' }}" />

                <!-- Product Stock -->
                <x-input name="stock" label="Product Stock" type="number" value="{{ $product->stock ?? '' }}" />

                <!-- Product Description -->
                <x-input name="description" label="Product Description" type="text"
                    value="{{ $product->description ?? '' }}" />

                <!-- Product Category -->
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id" id="category_id"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Product Image (optional) -->
                {{-- <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Upload Image
                        <span class="text-red-500 italic">* disbaled</span>
                    </label>
                    <input type="file" name="image" id="image" disabled
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div> --}}

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-md text-lg font-semibold shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Create Product
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-admin-layout>
