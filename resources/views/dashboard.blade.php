<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to your Cloud ! ') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-color: #f5f5f5;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8" style="padding-right: 30px; padding-left: 30px; padding-top: 20px; padding-bottom: 20px;;"> <!-- Added padding-left -->
                <h3 class="text-lg font-bold mb-4">Overview</h3>
                <p class="text-gray-700">
                    Welcome to the dashboard of your application. Here you can manage all aspects of your account and access powerful features designed to enhance your experience.
                </p>
                <h4 class="text-md font-semibold mt-6">Key Features:</h4>
                <ul class="list-inside list-disc pl-4 text-gray-600">
                    <li>Comprehensive Analytics</li>
                    <li>User Management</li>
                    <li>Content Creation Tools</li>
                    <li>Secure Data Handling</li>
                </ul>
                <p class="text-gray-700 mt-4">
                    If you have any questions or need assistance, please consult our <a href="#" class="text-blue-600 underline">help documentation</a> or contact our support team.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
