<?php

namespace App\Repositories\Contracts;

use App\Models\Category;

interface CategoryInterface
{
    /**
     * CategoryInterface constructor.
     * @param ProductInterface $product
     */
    public function __construct(ProductInterface $product);


    /**
     * Get all
     *
     * @return object|null
     */
    public function all(int $pagination = 5): ?object;


    /**
     * Get all
     *
     * @return object|null
     */
    public function allWithProducts(): ?object;


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
     * @return Category|null
     */
    public function create(array $data): ?Category;


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