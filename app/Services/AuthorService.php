<?php

namespace App\Services;

use App\Repositories\AuthorRepository;

class AuthorService
{
    protected $authorRepository;

    public function __construct(AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    public function createAuthor(array $data)
    {
        return $this->authorRepository->create($data);
    }

    public function updateAuthor($id, array $data)
    {
        $author = $this->authorRepository->findById($id);
        return $this->authorRepository->update($author, $data);
    }

    public function deleteAuthor($id)
    {
        $author = $this->authorRepository->findById($id);
        return $this->authorRepository->delete($author);
    }

    public function getAuthor($id)
    {
        return $this->authorRepository->findById($id);
    }

    public function getAllAuthors()
    {
        return $this->authorRepository->all();
    }
}

