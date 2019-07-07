<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido.',
            'name.string'   => 'El nombre debe ser una cadena.',
            'name.unique'   => 'El nombre :input ya esta agregado.',

            'price.requied' => 'El precio es requerido.',
            'price.integer' => 'El precio digitado :input debe ser entero.',

            'category_product_id.required'  => 'La categoria del producto es requerida',
            'category_product_id.integer'   => 'El id de la categoria :input debe ser entero.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:products',
            'price' => 'required|integer',
            'category_product_id' => 'required|integer'
        ];
    }
}
