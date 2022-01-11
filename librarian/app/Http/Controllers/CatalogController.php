<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCatalogRequest;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();
        return view('catalogs.list', compact('catalogs'));
    }

    public function create()
    {
        return view('catalogs.create');
    }

    public function store(Request $request)
    {
//        $validated = $request->validate([
//            "code"=>"required|min:5",
//            "name"=>"required"
//        ]);

       $catalog = new Catalog();
       $catalog->code = $request->code;
       $catalog->name = $request->name;
       $catalog->save();
       toastr()->success('Thêm danh mục thành công!');
       return redirect()->route('catalogs.index');
    }

    public function edit($id)
    {
        $catalog = Catalog::findOrFail($id);
        return view('catalogs.update', compact('catalog'));
    }

    public function update(UpdateCatalogRequest $request,$id)
    {
        $catalog = Catalog::findOrFail($id);
        $catalog->code = $request->code;
        $catalog->name = $request->name;
        $catalog->save();
        toastr()->success('Cập nhật danh mục thành công!');
        return redirect()->route('catalogs.index');
    }

    public function delete($id)
    {
        $catalog = Catalog::findOrFail($id);
        $catalog -> delete();
        toastr()->success('Xóa thành công!');
        return redirect()->route('catalogs.index');
    }
}
