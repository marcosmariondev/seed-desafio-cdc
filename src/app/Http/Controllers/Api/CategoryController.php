<?php

namespace App\Http\Controllers\Api;

use App\Entities\CategoryEntity;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function store(CategoryStoreRequest $request)
    {
        $categoryModel = Category::create($request->all());
        return response()->json(['message' => CategoryEntity::fromArray($categoryModel->toArray())],200);
    }

}
