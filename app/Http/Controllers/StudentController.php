<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;  // use Student
use App\Models\Room;  // use Room 


class StudentController extends Controller
{
    public function index ()
    {
        $students = Student::with('room')->latest()->get();
        return view('students.index', compact('students'));
    }


    public function create()
    {
        $rooms = Room::all(); // Fetch all rooms from the database
        return view('students.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required',
            'student_name' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        Student::create($request->all());

        return redirect('students')->with('success','Student createed successfully.');
    }

    public function edit(Student $student)
    {
        $rooms = Room::all(); // Fetch all rooms from the database
        return view('students.edit', compact('student', 'rooms'));
    }

    public function updateStudents(Request $request, $id) {
        $student = Student::findOrFail($id);

        $request->validate([
            'room_id' => 'required',
            'student_name' => 'required',   
            'gender' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $student->update($request->all());
        return redirect('students')->with('success','Student updated successfully.');
    }

    public function deleteStudent($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('students')->with('success','Student deleted successfully.');
    }
}
