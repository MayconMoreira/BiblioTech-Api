<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Services\AuthorService;
use App\Http\Resources\AuthorResource;

class AuthorController extends Controller
{
    protected $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        $authors = $this->authorService->getAllAuthors();
        return AuthorResource::collection($authors);
    }

    public function store(AuthorRequest $request)
    {
        $author = $this->authorService->createAuthor($request->validated());
        return new AuthorResource($author);
    }

    public function show($id)
    {
        $author = $this->authorService->getAuthor($id);
        return new AuthorResource($author);
    }

    public function update(AuthorRequest $request, $id)
    {
        $author = $this->authorService->updateAuthor($id, $request->validated());
        return new AuthorResource($author);
    }

    public function destroy($id)
    {
        $this->authorService->deleteAuthor($id);
        return response()->json(null, 204);
    }
}

