<?php


namespace App\Http\Controllers\Category;


use App\Models\Category;

class CategoryRepository
{
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