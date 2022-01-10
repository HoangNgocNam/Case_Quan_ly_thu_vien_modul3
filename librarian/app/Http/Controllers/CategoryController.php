<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
//        $validated = $request->validate([
//            "code"=>"required|min:5",
//            "name"=>"required"
//        ]);

        $category = new Category();
        $category->code = $request->code;
        $category->name = $request->name;
        $category->save();
        toastr()->success('Thêm danh mục thành công!');
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = Catalog::findOrFail($id);
        return view('categories.update', compact('category'));
    }

    public function update(Request $request,$id)
    {
//        $request->validate([
//            'code' => 'required',
//            'name' => 'required',
//        ]);
        $category = Category::findOrFail($id);
        $category->code = $request->code;
        $category->name = $request->name;
        $category->save();
        toastr()->success('Cập nhật danh mục thành công!');
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category -> delete();
        toastr()->success('Xóa thành công!');
        return redirect()->route('category.index');
    }
}
