<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory(array $data)
    {
        return $this->categoryRepository->create($data);
    }

    public function updateCategory($id, array $data)
    {
        $category = $this->categoryRepository->findById($id);
        return $this->categoryRepository->update($category, $data);
    }

    public function deleteCategory($id)
    {
        $category = $this->categoryRepository->findById($id);
        return $this->categoryRepository->delete($category);
    }

    public function getCategory($id)
    {
        return $this->categoryRepository->findById($id);
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->all();
    }
}

