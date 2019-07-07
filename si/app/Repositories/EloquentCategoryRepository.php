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
     * Get by id
     *
     * @param int $id
     * @return object|null
     */
    public function getById(int $id): ?object
    {
        try {
            return Category::find($id);
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
    public function create(array $data): ?Category
    {
        try {
            return Category::create($data);
        }
        catch (\Exception $e) {
            return null;
        }
    }

    /**
     * @param array $data
     * @return bool|null
     */
    public function update(array $data): ?bool
    {
        $category = $this->getById($data['id']);

        $category->name         = $data['name'];
        $category->description  = $data['description'];
        $category->icon_id      = $data['icon_id'];

        try {
            return $category->save();
        }
        catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Delete category
     *
     * @param array $id
     * @return bool|null
     */
    public function delete(int $id): ?bool
    {
        $category = $this->getById($id);

        try {
            return $category->delete();
        }
        catch (\Exception $e) {
            return null;
        }
    }
}