<x-admin-layout>
    <div class="p-3 mt-5 mb-2 mx-10">
        <div class="flex flex-row items-center justify-between mb-5 gap-5 ">
            <h1 class="text-center">Brands</h1>
            <button>
                <a href="{{ route('admin.brands.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded">
                    Add New Brand</a>
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-slate-300">
                <thead class="bg-slate-300">
                    <tr>
                        <th class="border  py-2">No</th>
                        <th class="border px-2 py-2">Name</th>
                        <th class="border px-2 py-2">Description</th>
                        <th class="border px-2 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr class="hover:bg-gray-100 text-center">
                            <td class="border py-2">
                                {{ $loop->iteration + ($brands->currentPage() - 1) * $brands->perPage() }}</td>
                            <td class="border px-2 py-2">{{ $brand->name }}</td>
                            <td class="border px-2 py-2">{{ $brand->description }}</td>
                            <td class="border px-2 py-2 flex gap-3 justify-center items-center">
                                <a href="{{ route('admin.brands.show', $brand->id) }}"
                                    class="bg-green-500 text-white px-3 py-1 rounded">View</a>
                                <a href="{{ route('admin.brands.edit', $brand->id) }}"
                                    class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                                <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST"
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
                {{ $brands->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
