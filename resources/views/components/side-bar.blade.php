<div class="fixed top-0 left-0 h-screen w-28  bg-black z-10">
    <h1 class="text-center text-white my-8">sidebar</h1>
    <ul class=" text-white flex flex-col justify-center items-center gap-10">
        <li>
            <a href=" {{ route('admin.products.index') }}">Product</a>
        </li>
        <li>
            <a href="{{ route('admin.categories.index') }}">Category</a>
        </li>
    </ul>
</div>
