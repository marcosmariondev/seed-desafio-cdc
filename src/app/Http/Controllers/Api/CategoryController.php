<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{

    public function store(CategoryStoreRequest $request): JsonResponse
    {
        $model = Category::create($request->validated());

        return response()->json($model,200);
    }

}
