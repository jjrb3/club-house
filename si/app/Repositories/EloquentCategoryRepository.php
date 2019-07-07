<?php


namespace App\Repositories;


use App\Models\Category;
use App\Repositories\Contracts\CategoryInterface;

class EloquentCategoryRepository implements CategoryInterface
{

    public function all(): ?object
    {
        // TODO: Implement all() method.
    }

    /**
     * Create category
     *
     * @param array $data
     * @return Category
     */
    public function create(array $data): ?Category {
        try {
            return Category::create($data);
        }
        catch (\Exception $e) {
            return null;
        }
    }
}