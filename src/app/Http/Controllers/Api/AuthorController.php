<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorStoreRequest;
use App\Models\Author;
use Illuminate\Http\JsonResponse;

class AuthorController extends Controller
{

    public function store(AuthorStoreRequest $request): JsonResponse
    {
        $model = Author::create($request->validated());

        return response()->json($model,200);
    }
}
