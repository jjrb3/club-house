<?php


namespace App\Http\Controllers\Category;

use Illuminate\Foundation\Http\FormRequest;


class CategoryRequest
{
    /**
     * Authorize
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Rules to verify
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:categories_product',
            'icon_id' => 'required'
        ];
    }
}