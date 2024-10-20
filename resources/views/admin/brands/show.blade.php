<x-admin-layout>
    <div class="max-w-2xl mx-auto bg-slate-300 p-8 rounded-lg shadow-lg">
        <h1 class="text-center font-semibold text-3xl mb-4">Brand Detail</h1>

        <div class="flex justify-between items-center ">
            <div>
                <div class="mb-4">
                    <strong>Name:</strong>
                    <p>{{ $brand->name }}</p>
                </div>
                <div class="mb-4">
                    <strong>Descroption:</strong>
                    <p>{{ $brand->description }}</p>
                </div>
            </div>
            <div class="w-40">
                <img src={{ $brand->image }} alt="" srcset="" />
            </div>
        </div>
        <div class="flex justify-center">
            <a href="{{ route('admin.brands.index') }}"
                class="bg-blue-600 text-white px-6 py-2 rounded-md text-lg font-semibold shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Back to Brands
            </a>
        </div>
    </div>

</x-admin-layout>
