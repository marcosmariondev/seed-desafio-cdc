<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorStoreRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function store(AuthorStoreRequest $request)
    {
        Author::create($request->all());

        return response()->json(['message' => 'Autor criado com sucesso!'],200);
    }
}
