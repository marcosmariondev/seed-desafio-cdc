<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{

    public function index(): JsonResponse
    {
        $books = Book::select('id', 'title')->paginate(50);

        return response()->json($books, 200);
    }
    public function store(BookStoreRequest $request): JsonResponse
    {
        $bookModel = Book::create($request->validated());

        return response()->json($bookModel, 200);
    }

    public function show(string $book)
    {
        try {
            $model = Book::with('author', 'category')
                ->where('books.id', $book)
                ->firstOrFail();

            return response()->json($model, 200);
        }catch (\Exception $e){
            return response()->json(['message' => 'Entity not found'], 404);
        }
    }
}
