<x-admin-layout>
    <div class="p-3 mt-5  mb-2 mx-10">
        <div class="flex flex-row items-center justify-between mb-5 gap-5">
            <h1 class="text-center">Products</h1>
            <button>
                <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded">
                    Add Product</a>
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-slate-300">
                <thead class="bg-slate-300">
                    <tr>
                        <th class="border px-2 py-2">No</th>
                        <th class="border px-2 py-2">Name</th>
                        <th class="border px-2 py-2">Price</th>
                        <th class="border px-2 py-2">Category</th>
                        <th class="border px-2 py-2">Brand</th>
                        <th class="border px-2 py-2">Status</th>
                        <th class="border px-2 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-100 text-center">
                            <td class="border px-2 py-2">
                                {{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}
                            </td>
                            <td class="border px-2 py-2 text-left">{{ $product->name }}</td>
                            <td class="border px-2 py-2">Rp.{{ $product->price }}</td>
                            <td class="border px-2 py-2">{{ $product->category->name }}</td>
                            <td class="border px-2 py-2 text-center">{{ $product->brand->name }}</td>
                            <td class="border px-2 py-2 text-center ">
                                @if ($product->is_active == 'TRUE')
                                    <span class="text-green-600 font-semibold">Active</span>
                                @else
                                    <span class="text-red-600 font-semibold">Inactive</span>
                                @endif
                            </td>
                            <td class="border px-2 py-2 flex gap-3 justify-center items-center">
                                <a href="{{ route('admin.products.show', $product->id) }}"
                                    class="bg-green-500 text-white px-3 py-1 rounded">View</a>
                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                    class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="my-5">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
