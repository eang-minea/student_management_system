<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">

            <button class="bg-blue-500 text-white p-2 rounded-md">
            <a href="/rooms/create">Create Room</a> 
            </button>

    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gray-100">
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Room Name</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Description</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Floor</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Capacity</th>
            </tr>
        </thead>
        <tbody class="bg-white">

        <!-- loop through rooms and display then the table -->
            @foreach ($rooms as $room) 

            <tr>
                <td class="py-4 px-6 border-b border-gray-200">{{$room->name}}</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $room->description}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $room->floor}}</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">{{ $room->capacity}}</span>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
    </div>
    </div>
</div>
</x-app-layout>
