<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="container mx-auto p4-10">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-xl">
        <div class="md:flex">
            <div class="w-full px-6 py-8 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800">Create Student</h2>
                <p class="mt-4 text-gray-600">Please fill out the form below to create a new Student.</p>
                <form class="mt-6" method="POST" action="/students">
                    @csrf

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Room Id
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="room_id" type="text" placeholder="Enter room id">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="description">
                            Student Name
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         name="student_name" type="text" placeholder="Enter student name">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Floor">
                            Gender
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="gender" type="text" placeholder="Enter Gender">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Capacity">
                            Phone Number
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="phone_number" type="text" placeholder="Enter Phone Number">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Capacity">
                            Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="email" type="text" placeholder="Enter Email">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="Capacity">
                            Address
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="address" type="text" placeholder="Enter Address">
                    </div>
                    
                    <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    type="submit">
                    Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>
</x-app-layout>
