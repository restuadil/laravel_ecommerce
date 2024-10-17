<x-admin-layout>
    <div class="max-w-2xl mx-auto bg-slate-300 p-8 rounded-lg shadow-lg py-5">
        <h1 class="text-center font-semibold text-3xl mb-4">Edit Category</h1>
        <p class="text-center mb-2 italic text-gray-600">Please update the form below</p>
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6">
                <!-- Product Name -->
                <x-input type="text" name="name" label="Product Name" value="{{ $category->name }}" />

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
