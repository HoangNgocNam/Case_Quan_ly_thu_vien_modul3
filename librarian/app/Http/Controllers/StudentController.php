<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view("students.list",compact("students"));
    }

    public function create()
    {
        return view("students.create");
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->student_code = $request->student_code;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->birthday = $request->birthday;
        $student->save();
        return redirect()->route("students.list");
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route("students.list");
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view("students.update",compact("student"));
    }

    public function update(Request $request,$id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->student_code = $request->student_code;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->birthday = $request->birthday;
        $student->save();
        $student->update();
        return redirect()->route("students.list");
    }
}
