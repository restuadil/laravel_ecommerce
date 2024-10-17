<div class="fixed top-0 left-0 h-screen w-40 bg-gray-900 shadow-lg z-10">
    <h1 class="text-center text-white my-6 text-xl font-bold">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </h1>
    <div>
        <ul class="text-white flex flex-col justify-center items-center gap-8">
            <a href="{{ route('admin.products.index') }}"
                class="flex flex-row items-center justify-start w-full px-3 py-2 gap-2 hover:bg-gray-700 transition-colors duration-300 rounded-md">
                <i class='bx bx-package bx-tada bx-md'></i>
                <span class="text-white text-base font-medium">Product</span>
            </a>
            <a href="{{ route('admin.categories.index') }}"
                class="flex flex-row items-center justify-start w-full px-3 py-2 gap-2 hover:bg-gray-700 transition-colors duration-300 rounded-md">
                <i class='bx bx-category bx-spin bx-md'></i>
                <span class="text-white text-base font-medium">Category</span>
            </a>
        </ul>
    </div>
</div>
