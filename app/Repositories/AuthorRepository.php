<?php

namespace App\Repositories;

use App\Models\Author;

class AuthorRepository
{
    public function create(array $data)
    {
        return Author::create($data);
    }

    public function findById($id)
    {
        return Author::findOrFail($id);
    }

    public function update(Author $author, array $data)
    {
        $author->update($data);
        return $author;
    }

    public function delete(Author $author)
    {
        return $author->delete();
    }

    public function all()
    {
        return Author::all();
    }
}

