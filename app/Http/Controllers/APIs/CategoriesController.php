<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoriesController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Success',
            'data' => CategoryResource::collection(Category::all())
        ]);
    }
public function show(int $id): JsonResponse
{
    $category = Category::find($id);

    if (!$category) {
        return response()->json([
            'message' => 'Category not found'
        ], 404);
    }

    return response()->json([
        'message' => 'Success',
        'data' => new CategoryResource($category)
    ]);
}

public function store(StoreCategoryRequest $request): JsonResponse
{
    $category = Category::create($request->validated());

    return response()->json([
        'message' => 'Category created successfully',
        'data' => new CategoryResource($category)
    ], 201);
}

public function update(UpdateCategoryRequest $request, int $id): JsonResponse
{
    $category = Category::find($id);

    if (!$category) {
        return response()->json([
            'message' => 'Category not found'
        ], 404);
    }

    $category->update($request->validated());

    return response()->json([
        'message' => 'Category updated successfully',
        'data' => new CategoryResource($category)
    ]);
}

public function destroy(int $id): JsonResponse
{
    $category = Category::find($id);

    if (!$category) {
        return response()->json([
            'message' => 'Category not found'
        ], 404);
    }

    $category->delete();

    return response()->json([
        'message' => 'Category deleted successfully'
    ]);
}}