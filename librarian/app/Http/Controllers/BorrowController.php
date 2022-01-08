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
}
