<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $borrows = Borrow::all();
        return view('borrows.list', compact('borrows'));
    }

    public function create()
    {
        return view('borrows.create');
    }

    public function store(Request $request)
    {
        // Danh sách id sách cho mượn
        $bookIds = $request->book_id;
        $status = $request->status;
        // Số lượng sách cho mượn
        $count = count($bookIds);
        for ($n = 0; $n < $count; $n++) {
            $borrow = new Borrow();
            $borrow->student_id = $request->student_id;
            $borrow->book_id = $bookIds[$n];
            $borrow->status = $status[$n];
            $borrow->borrow_date = $request->borrow_date;
            $borrow->borrow_return = $request->borrow_return;
            $borrow->time_allowed_to_borrow = $request->borrow_return;
            $borrow->save();
        }
        return redirect()->route('borrows.index');
    }

    public function edit($id)
    {
        $borrow = Borrow::findOrFail($id);
        return view('borrows.update', compact('borrow'));
    }

    public function update(Request $request, $id)
    {
        $borrow = Borrow::findOrFail($id);
        $borrow->student_id = $request->student_id;
        $borrow->book_id = $request->book_id;
        $borrow->borrow_date = $request->borrow_date;
        $borrow->borrow_return = $request->borrow_return;
        $borrow->time_allowed_to_borrow = $request->time_allowed_to_borrow;
        $borrow->status = $request->status;
        $borrow->save();
        return redirect()->route('borrows.index');
    }

    public function delete($id)
    {
        $borrow = Borrow::findOrFail($id);
        $borrow->delete();
        return redirect()->route('borrows.index');
    }

    public function showDetail($id)
    {
        $borrow = Borrow::findOrFail($id);
        $students = Student::all();
        $books = Book::all();
        return view('borrows.detail', compact('borrow', 'students', 'books'));
    }

    public function searchStudent($keyword)
    {
        $student = Student::where("name","like",'%'.$keyword.'%')->get();
        return response()->json($student);
    }

}
