<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activity Log') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <div class="table-responsive">
                    <table class="table table-hover border border-gray-600 rounded-lg">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">User ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Action</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-600">
                            @foreach($logs as $log)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ optional($log->user)->name ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $log->action }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $log->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $logs->links() }} <!-- Pagination links -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
