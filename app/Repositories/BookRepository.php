<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    public function create(array $data)
    {
        $book = Book::create($data);
        if (isset($data['categories'])) {
            $book->categories()->sync($data['categories']);
        }
        return $book;
    }

    public function findById($id)
    {
        return Book::with('author', 'categories')->findOrFail($id);
    }

    public function update(Book $book, array $data)
    {
        $book->update($data);
        if (isset($data['categories'])) {
            $book->categories()->sync($data['categories']);
        }
        return $book;
    }

    public function delete(Book $book)
    {
        return $book->delete();
    }

    public function all()
    {
        return Book::with('author', 'categories')->get();
    }
}

