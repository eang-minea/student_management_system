<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             @session('success')
            <span class=bg-green-500 text-white>
                {{session('success')}}
            </span>
            @endsession
            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">

            <button class="bg-blue-500 text-white">
            <a href="/students/create">Create Student</a> 
            </button>

    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gray-100">
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">ID</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Room Id</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Student Name</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Gender</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Phone Number</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Address</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white">

        <!-- loop through students and display them in the table -->
            @foreach ($students as $student) 

            <tr>
                <td class="py-4 px-6 border-b border-gray-200">{{$student->id}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{$student->room_id}}</td>
                <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $student->student_name}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $student->gender}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $student->phone_number}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $student->email}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{ $student->address}}</td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <a href="/students/{{ $student->id }}/edit">Edit</a>

                    <form action="/students/{{$student->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
    </div>
</div>
</x-app-layout>




