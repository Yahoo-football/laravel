<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                "message" => "Category not found"
            ], 404);
        }

        return response()->json($category);
    }

    public function store()
    {
        $category = Category::create([
            "name" => request()->name,
            "dec" => request()->dec
        ]);

        return response()->json($category, 201);
    }

    public function update($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                "message" => "Category not found"
            ], 404);
        }

        $category->update([
            "name" => request()->name,
            "dec" => request()->dec
        ]);

        return response()->json($category);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                "message" => "Category not found"
            ], 404);
        }

        $category->delete();

        return response()->json([
            "message" => "Category deleted successfully"
        ]);
    }
}