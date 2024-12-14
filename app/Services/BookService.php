<?php

namespace App\Services;

use App\Repositories\BookRepository;

class BookService
{
    protected $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function createBook(array $data)
    {
        return $this->bookRepository->create($data);
    }

    public function updateBook($id, array $data)
    {
        $book = $this->bookRepository->findById($id);
        return $this->bookRepository->update($book, $data);
    }

    public function deleteBook($id)
    {
        $book = $this->bookRepository->findById($id);
        return $this->bookRepository->delete($book);
    }

    public function getBook($id)
    {
        return $this->bookRepository->findById($id);
    }

    public function getAllBooks()
    {
        return $this->bookRepository->all();
    }
}

