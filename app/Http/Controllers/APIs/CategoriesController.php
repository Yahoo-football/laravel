<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoriesController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Category::all());
    }

    public function show(int $id): JsonResponse
    {
        $category = Category::find($id);

        return $category
            ? response()->json($category)
            : response()->json(['message' => 'Category not found'], 404);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'dec' => 'nullable|string',
        ]);

        $category = Category::create($data);

        return response()->json($category, 201);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $category = Category::find($id);

        if (! $category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'dec' => 'nullable|string',
        ]);

        $category->update($data);

        return response()->json($category);
    }

    public function destroy(int $id): JsonResponse
    {
        $category = Category::find($id);

        if (! $category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $category->delete();

        return response()->json(null, 204);
    }
}
