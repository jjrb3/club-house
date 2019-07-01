<?php


namespace App\Http\Controllers\Category;


use App\Models\icon;

class IconEloquentRepository
{
    /**
     * @return object|null
     */
    public function getAll(): object
    {
        try {
            return icon::all();
        }
        catch (\Exception $e) {
            return $e;
        }
    }
}