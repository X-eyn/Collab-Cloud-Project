<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 border-2 border-gray-300" style="padding-right: 30px; padding-left: 30px; padding-top: 20px; padding-bottom: 20px; border: 2px solid #333;">
                <h3 class="text-lg font-semibold mb-4">Get in Touch</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <p class="text-gray-700 font-medium">Raiyan Bin Gaffar:</p>
                        <a href="mailto:info@example.com" class="text-blue-600 hover:underline">raiyan.bin.gaffar@g.bracu.ac.bd</a>
                        <p class="text-gray-700 font-medium">Zain Ahmed:</p>
                        <a href="mailto:info@example.com" class="text-blue-600 hover:underline">zain.ahmed@g.bracu.ac.bd</a>
                        <p class="text-gray-700 font-medium">Mayesha Tabassum:</p>
                        <a href="mailto:info@example.com" class="text-blue-600 hover:underline">mayesha.tabassum@g.bracu.ac.bd</a>
                        <p class="text-gray-700 font-medium mt-4">Reports and Documentations:</p>
                        <a href="https://docs.google.com/document/d/1yI32R7m5CDUTRVwlU5tZ2bhuHQ8ym5Hv25LyUelpmgs/edit?fbclid=IwAR0rtfpIq0yETUDePW4S_eaDu7IEhoNhD6C4ppWc2IgujfPjNiR-cqkjqfY" class="text-blue-600 hover:underline">471 Reports</a>

                        <p class="text-gray-700 font-medium mt-4">Phone:</p>
                        <p>(123) 456-7890</p>
                    </div>
                    <div>
                        <p class="text-gray-700 font-medium">GitHub Links:</p>
                        <!-- Add your GitHub links here -->
                        <a href="https://github.com/X-eyn/Collab-Cloud-Project" class="text-blue-600 hover:underline block">Repo 1</a>
                        <a href="https://github.com/X-eyn/collabcloud" class="text-blue-600 hover:underline block">Repo 2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
