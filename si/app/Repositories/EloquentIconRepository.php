<?php


namespace App\Repositories;

use App\Models\Icon;
use App\Repositories\Contracts\IconInterface;

class EloquentIconRepository implements IconInterface
{
    /**
     * Get all icons
     *
     * @return object|null
     */
    public function all(): ?object
    {
        try {
            return Icon::all();
        }
        catch (\Exception $e) {
            return null;
        }
    }
}