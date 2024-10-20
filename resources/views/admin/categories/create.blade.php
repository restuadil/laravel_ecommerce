<x-admin-layout>
    <div class="max-w-2xl mx-auto bg-slate-300 px-8  rounded-lg shadow-lg h-min items-center py-5">
        <h1 class="text-center font-semibold text-3xl mb-4">Create Category</h1>
        <p class="text-center mb-2 italic text-gray-600">Please fill out the form below</p>

        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-5">

                <!-- Product Name -->
                <x-input name="name" label="Category Name" type="text" value="{{ $category->name ?? '' }}" />


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
