<?php

namespace App\Http\Controllers\Api;

use App\Entities\BookEntity;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request): JsonResponse
    {
        $bookModel = Book::create($request->all());
        return response()->json(['message' => BookEntity::fromArray($bookModel->toArray())], 200);
    }
}
