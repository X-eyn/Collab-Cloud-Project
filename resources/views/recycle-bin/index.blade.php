<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recycle Bin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <div class="table-responsive">
                    <table class="table table-hover border border-gray-600 rounded-lg">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">File Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-600">
                            @foreach($files as $file)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $file->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('recycle-bin.restore', $file->id) }}" class="btn btn-blue border border-blue-500 rounded-sm">Restore</a>
                                    <a href="{{ route('recycle-bin.destroy', $file->id) }}" class="btn btn-red border border-red-500 rounded-sm">Delete Permanently</a>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $files->links() }} <!-- Pagination links -->
            </div>
        </div>
    </div>
</x-app-layout>
