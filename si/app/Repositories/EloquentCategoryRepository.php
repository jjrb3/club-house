<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\ProductInterface;

/**
 * Class EloquentCategoryRepository
 * @package App\Repositories
 */
class EloquentCategoryRepository implements CategoryInterface
{
    protected $productRepository;

    /**
     * EloquentCategoryRepository constructor.
     * @param ProductInterface $product
     */
    public function __construct(ProductInterface $product)
    {
        $this->productRepository = $product;
    }

    /**
     * Get all category with icon name
     *
     * @return object|null
     */
    public function all(int $pagination = 5): ?object
    {
        try {
            return Category::select(
                'categories_product.*',
                'icons.name AS icon_code'
            )
                ->join('icons','categories_product.icon_id','icons.id')
                ->paginate($pagination);
        }
        catch (\Exception $e) {
            return null;
        }
    }

    public function allWithProducts(): ?object
    {
        $categories = $this->all(10000);

        foreach ($categories as $key => $category) {

            $categories[$key]->products = $this->productRepository
                ->allByCategoryWithoutPaginate($category->id);
        }

        return $categories;
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