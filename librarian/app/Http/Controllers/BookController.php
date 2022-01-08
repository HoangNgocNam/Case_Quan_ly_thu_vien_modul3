<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('books.list', compact('books', 'categories', 'publishers'));
    }

    public function create()
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('books.create', compact('categories', 'publishers'));
    }

    public function store(Request $request)
    {
        $book = new Book();
        if ($request->hasFile('imag')) {
            $imag = $request->file('imag');
            $path = $imag->store('imags', 'public');
            $book->imag = $path;
        }
        $book->name = $request->name;
        $book->desc = $request->desc;
        $book->status = $request->status;
        $book->category_id = $request->category_id;
        $book->publisher_id = $request->publisher_id;
        $book->quanlity = $request->quanlity;
        $book->save();
        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('books.update',compact('book','categories','publishers'));
    }

    public function update(Request $request,$id)
    {
        $book = Book::findOrFail($id);
        if ($request->hasFile('imag')) {
            $imag = $request->file('imag');
            $path = $imag->store('imags', 'public');
            $book->imag = $path;
        }
        $book->name = $request->name;
        $book->desc = $request->desc;
        $book->status = $request->status;
        $book->category_id = $request->category_id;
        $book->publisher_id = $request->publisher_id;
        $book->quanlity = $request->quanlity;
        $book->save();
        return redirect()->route('books.index');
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index');
    }

    public function searchBook(Request $request)
    {
        $keyword = $request->keyword;
        $books = Book::where('name','LIKE','%'.$keyword.'%')->with('publishers')->get();
        $data = [
            'status' => 'success',
            'data' => $books
        ];
        return response()->json($data);
    }
}
