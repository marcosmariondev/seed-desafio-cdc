<?php

namespace App\Http\Controllers\Api;

use App\Entities\AuthorEntity;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorStoreRequest;
use App\Models\Author;
use Illuminate\Http\JsonResponse;

class AuthorController extends Controller
{

    public function store(AuthorStoreRequest $request): JsonResponse
    {
        $authorModel = Author::create($request->all());

        return response()->json(['message' => AuthorEntity::fromArray($authorModel->toArray())],200);
    }
}
