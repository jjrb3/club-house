<?php


namespace App\Repositories;


use App\Models\Category;
use App\Repositories\Contracts\CategoryInterface;

class EloquentCategoryRepository implements CategoryInterface
{
    /**
     * Get all category with icon name
     *
     * @return object|null
     */
    public function all(): ?object
    {
        try {
            return Category::select(
                'categories_product.*',
                'icons.name AS icon_code'
            )
                ->join('icons','categories_product.icon_id','icons.id')
                ->paginate(5);
        }
        catch (\Exception $e) {
            return null;
        }
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