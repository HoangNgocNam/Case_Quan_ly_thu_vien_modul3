<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Student;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $borrows = Borrow::all();
        return view('borrows.list',compact('borrows'));
    }

    public function create()
    {
        return view('borrows.create');
    }

    public function store(Request $request)
    {
        $borrow = new Borrow();
        $borrow->student_id = $request->student_id;
//        $borrow->book_id = $request->book_id;
        $borrow->borrow_date = $request->borrow_date;
        $borrow->borrow_return = $request->borrow_return;
        $borrow->time_allowed_to_borrow = $request->time_allowed_to_borrow;
        $borrow->status = $request->status;
        $borrow->save();
        return redirect()->route('borrows.index');
    }

    public function edit($id)
    {
        $borrow = Borrow::findOrFail($id);
        return view('borrows.update',compact('borrow'));
    }

    public function update(Request $request,$id)
    {
        $borrow = Borrow::findOrFail($id);
        $borrow->student_id = $request->student_id;
//        $borrow->book_id = $request->book_id;
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
}
