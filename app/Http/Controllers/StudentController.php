<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;  // use Student 


class StudentController extends Controller
{
    public function index ()
    {
        $students = Student::latest()->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
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
        return view('students.edit', compact('student'));
    }

    public function update(Reuest $request, $id) {
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
