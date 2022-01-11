<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
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

    public function store(CreateStudentRequest $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->student_code = $request->student_code;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->birthday = $request->birthday;
        $student->save();
        toastr()->success('Thêm khách hàng thành công!');
        return redirect()->route("students.list");
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        toastr()->success('Xóa khách thành công');
        return redirect()->route("students.list");
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view("students.update",compact("student"));
    }

    public function update(UpdateStudentRequest $request,$id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->student_code = $request->student_code;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->birthday = $request->birthday;
        $student->save();
        $student->update();
        toastr()->success('Cập nhật khách hàng thành công');
        return redirect()->route("students.list");
    }
}
