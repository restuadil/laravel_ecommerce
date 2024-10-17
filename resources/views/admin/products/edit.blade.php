<x-admin-layout>
    <div class="max-w-2xl mx-auto bg-slate-300 p-8 rounded-lg shadow-lg py-5">
        <h1 class="text-center font-semibold text-3xl mb-4">Edit Product</h1>
        <p class="text-center mb-2 italic text-gray-600">Please update the form below</p>
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6">
                <!-- Product Name -->
                <x-input type="text" name="name" label="Product Name" value="{{ $product->name }}" />
                <!-- Product Price -->
                <x-input type="number" name="price" label="Product Price" value="{{ $product->price }}" />

                <!-- Product Stock -->
                <x-input type="number" name="stock" label="Product Stock" value="{{ $product->stock }}" />

                <!-- Product Description -->
                <x-input type="text" name="description" label="Product Description"
                    value="{{ $product->description }}" />
                <!-- Product Category -->
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id" id="category_id"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Product Status -->
                <div class="flex items-center mb-4">
                    <input type="checkbox" name="is_active" id="is_active" value="1"
                        class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                        {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }}>
                    <label for="is_active" class="ml-2 block text-sm text-gray-700">
                        Active
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-md text-lg font-semibold shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Update Product
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-admin-layout>
