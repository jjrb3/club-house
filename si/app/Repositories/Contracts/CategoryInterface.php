<?php

namespace App\Repositories\Contracts;

use App\Models\Category;

interface CategoryInterface
{
    /**
     * Get all
     *
     * @return object|null
     */
    public function all(): ?object;

    /**
     * Create data
     *
     * @param array $data
     * @return Category|null
     */
    public function create(array $data): ?Category;
}