<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <button class="bg-blue-500 text-white">
            <a href="/rooms/create">Create Room</a> 
        </button>

            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gray-100">
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Name</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Phone</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr>
                <td class="py-4 px-6 border-b border-gray-200">John Doe</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">johndoe@gmail.com</td>
                <td class="py-4 px-6 border-b border-gray-200">555-555-5555</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">Active</span>
                </td>
            </tr>
            <tr>
                <td class="py-4 px-6 border-b border-gray-200">Jane Doe</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">janedoe@gmail.com</td>
                <td class="py-4 px-6 border-b border-gray-200">555-555-5555</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <span class="bg-red-500 text-white py-1 px-2 rounded-full text-xs">Inactive</span>
                </td>
            </tr>
            <tr>
                <td class="py-4 px-6 border-b border-gray-200">Jane Doe</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">janedoe@gmail.com</td>
                <td class="py-4 px-6 border-b border-gray-200">555-555-5555</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <span class="bg-red-500 text-white py-1 px-2 rounded-full text-xs">Inactive</span>
                </td>
            </tr>
            <tr>
                <td class="py-4 px-6 border-b border-gray-200">Jane Doe</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">janedoe@gmail.com</td>
                <td class="py-4 px-6 border-b border-gray-200">555-555-5555</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <span class="bg-red-500 text-white py-1 px-2 rounded-full text-xs">Inactive</span>
                </td>
            </tr>
            <!-- Add more rows here -->
        </tbody>
    </table>
</div>
        </div>
    </div>
</x-app-layout>
