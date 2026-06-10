<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return response()->json($categories);
    }

    public function create()
    {
        return view('categories.form');
    }
    public function store()
    {
        Category::create(
            [
                "name" => request()->name,
                "dec" => request()->dec
            ]
        );
        return redirect('categories');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }
    public function update($id)
    {
        $category = Category::find($id);

        $category->update([
            "name" => request()->name,
            "dec" => request()->dec
        ]);
        return redirect('categories');
    }
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('categories');
    }
}
