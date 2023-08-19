<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recycle Bin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <!-- Table to list trashed files -->
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">File Name</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files as $file)
                            <tr>
                                <td class="border px-4 py-2">{{ $file->name }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('recycle-bin.restore', $file->id) }}">Restore</a>
                                    <a href="{{ route('recycle-bin.destroy', $file->id) }}">Delete Permanently</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $files->links() }} <!-- Pagination links -->
            </div>
        </div>
    </div>
</x-app-layout>
