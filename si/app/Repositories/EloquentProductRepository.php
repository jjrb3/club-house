<?php


namespace App\Repositories;


use App\Models\Product;
use App\Repositories\Contracts\ProductInterface;

class EloquentProductRepository implements ProductInterface
{
    /**
     * Get all product
     *
     * @return object|null
     */
    public function all(): ?object
    {
        try {
            return null;
        }
        catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Get all product
     *
     * @return object|null
     */
    public function allByCategory(int $categoryId): ?object
    {
        try {
            return Product::where('category_product_id', $categoryId)
                ->orderBy('name')
                ->paginate(10);
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
            return Product::find($id);
        }
        catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Create product
     *
     * @param array $data
     * @return Product
     */
    public function create(array $data): ?Product
    {
        try {
            return Product::create($data);
        }
        catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Update product
     *
     * @param array $data
     * @return bool|null
     */
    public function update(array $data): ?bool
    {
        $product = $this->getById($data['id']);

        $product->name                  = $data['name'];
        $product->description           = $data['description'];
        $product->price                 = $data['price'];
        $product->big_size              = isset($data['big_size']) ? $data['big_size'] : 0;
        $product->medium_size           = isset($data['medium_size']) ? $data['medium_size'] : 0;
        $product->small_size            = isset($data['small_size']) ? $data['small_size'] : 0;
        $product->category_product_id   = (int) $data['category_product_id'];

        try {
            return $product->save();
        }
        catch (\Exception $e) {
            dd($e->getMessage());
            return null;
        }
    }
}