<?php

namespace App\Repositories\Contracts;

use App\Models\Icon;

interface IconInterface
{
    /**
     * Get all
     *
     * @return object|null
     */
    public function all(): ?object;
}