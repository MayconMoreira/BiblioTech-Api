<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Services\BookService;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        $books = $this->bookService->getAllBooks();
        return BookResource::collection($books);
    }

    public function store(BookRequest $request)
    {
        $book = $this->bookService->createBook($request->validated());
        return new BookResource($book);
    }

    public function show($id)
    {
        $book = $this->bookService->getBook($id);
        return new BookResource($book);
    }

    public function update(BookRequest $request, $id)
    {
        $book = $this->bookService->updateBook($id, $request->validated());
        return new BookResource($book);
    }

    public function destroy($id)
    {
        $this->bookService->deleteBook($id);
        return response()->json(null, 204);
    }
}

