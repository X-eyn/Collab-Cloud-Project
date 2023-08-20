<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to your Cloud Storage !') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-color: #f5f5f5;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8" style="padding-right: 30px; padding-left: 30px; padding-top: 20px; padding-bottom: 20px; border: 2px solid #333;">
                <h1 class="text-2xl font-semibold mb-4">CollabCloud (Collaborative Cloud Storage)</h1>

                <h3 class="text-lg font-bold mb-4">Features:</h3>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>
                        <strong>File Browser:</strong> The project includes a file browser component for navigating through files and folders.
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;View all files and folders</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Modify Files (Create/Rename/Delete)</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;View breadcrumbs (File pathings)</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;View file info at root directory</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Team Spaces:</strong> Each team has a dedicated space for their files and folders.
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Add/Remove new Spaces</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Switch between Spaces</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Regulate Privileges of Space members</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Invite People to space</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Rename the Space</li>
                        </ul>
                    </li>
                    <li>
                        <strong>File Upload:</strong> Users can upload files seamlessly to their team's space.
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Effortlessly upload files of various formats to your team's designated space.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Support for multiple file uploads at once, enhancing efficiency.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Progress indicators for each file upload to keep you informed.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Folder Creation:</strong> Users can create folders within their team's space.
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Seamlessly create new folders within your team's dedicated space.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Organize files systematically by grouping them into relevant folders.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Customize folder names and icons to improve visual organization.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Nested folder support for creating subdirectories within existing folders.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Instant Search:</strong> Users can instantly search for files and folders within their team's space.
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Livewire Scout instantly searches through your team's space for files and folders.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;TNTSearch allows search results to be displayed in real-time as you type, ensuring efficiency.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Highlighted search terms within the results for easy identification.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Recycle Bin:</strong> Users can restore accidentally deleted files/folders
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;The system handles soft deletes for quick file restoration.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Activity Logs:</strong> Users can keep track of their actions on site
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Maintain a comprehensive record of user actions and interactions within the collaborative cloud storage system.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Timestamped entries create a clear timeline of events, which helps in tracking and accountability.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Enhance transparency by monitoring activities such as file uploads, modifications, and deletions.</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Activity logs are exclusive to each team and users for enhanced privacy.</li>
                        </ul>
                    </li>
                </ul>

                <h3 class="text-lg font-bold mb-4 mt-8">Requirements:</h3>
                <ul class="list-disc pl-6 text-gray-700">
                    <li><strong>Laravel Jetstream:</strong> The project’s based on Laravel Jetstream scaffold.</li>
                    <li><strong>Livewire:</strong> The file browser component managed by Livewire.</li>
                    <li><strong>Team Management:</strong> The ability to manage different team spaces.</li>
                    <li><strong>File Management:</strong> The ability to handle file uploads and organization within each team's space.</li>
                    <li><strong>Search Functionality:</strong> Able to handle instant search queries for files and folders.</li>
                </ul>

                <p class="text-gray-700 mt-4">
                    If you have any questions or need assistance about this project, please consult our <a href="{{ route('contact') }}" class="text-blue-600 underline">Project Team</a> or mail us.
                </p> 
            </div>
        </div>
    </div>
</x-app-layout>
