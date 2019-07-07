<?php

namespace App\Repositories\Contracts;

use App\Models\Product;

interface ProductInterface
{
    /**
     * Get all
     *
     * @return object|null
     */
    public function all(): ?object;


    /**
     * Get all by category
     *
     * @return object|null
     */
    public function allByCategory(int $categoryId): ?object;


    /**
     * Get by ID
     *
     * @return object|null
     */
    public function getById(int $id): ?object;


    /**
     * Create data
     *
     * @param array $data
     * @return Product|null
     */
    public function create(array $data): ?Product;


    /**
     * Update data
     *
     * @param array $data
     * @return bool|null
     */
    public function update(array $data): ?bool;


    /**
     * Delete data
     *
     * @param int $id
     * @return bool|null
     */
    public function delete(int $id): ?bool;
}