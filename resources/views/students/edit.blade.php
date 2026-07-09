<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="container mx-auto p4-10">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-xl">
        <div class="md:flex">
            <div class="w-full px-6 py-8 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800">Update Student</h2>
                <p class="mt-4 text-gray-600">Please fill out the form below to Update a Student.</p>
                <form class="mt-6" method="POST" action="/students/{{ $student->id }}">

                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Room Name
                        </label>
                        <select name="room_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="room_id">
                            @foreach ($rooms as $room)
                                <option {{ $student->room_id == $room->id ? 'selected' : '' }} value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="description">
                            Student Name
                        </label>
                        <input value="{{ $student->student_name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         name="student_name" type="text" placeholder="Enter student name">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Floor">
                            Gender
                        </label>
                        <input value="{{ $student->gender }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="gender" type="text" placeholder="Enter Gender">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Capacity">
                            Phone Number
                        </label>
                        <input value="{{ $student->phone_number }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="phone_number" type="text" placeholder="Enter Phone Number">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Capacity">
                            Email
                        </label>
                        <input value="{{ $student->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="email" type="text" placeholder="Enter Email">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Capacity">
                            Address
                        </label>
                        <input value="{{ $student->address }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="address" type="text" placeholder="Enter Address">
                    </div>
                    
                    <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    type="submit">
                    Update Student
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>
</x-app-layout>
