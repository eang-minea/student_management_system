<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="container mx-auto p4-10">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-xl">
        <div class="md:flex">
            <div class="w-full px-6 py-8 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800">Edit Room</h2>
                <p class="mt-4 text-gray-600">Please fill out the form below to Edit the room.</p>
                <form class="mt-6" method="POST" action="/rooms/{{ $room->id }}">

                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Room Name
                        </label>
                        <input value="{{ $room->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="name" type="text" placeholder="Enter room name">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="description">
                            Description
                        </label>
                        <input value="{{ $room->description }}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         name="description" type="text" placeholder="Enter Description">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Floor">
                            Floor
                        </label>
                        <input value="{{ $room->floor }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="floor" type="text" placeholder="Enter Floor">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Capacity">
                            Capacity
                        </label>
                        <input value="{{ $room->capacity }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="capacity" type="text" placeholder="Capacity">
                    </div>
                    
                    <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    type="submit">
                    Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</x-app-layout>
