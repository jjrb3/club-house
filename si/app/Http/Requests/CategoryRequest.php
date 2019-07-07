<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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

            'icon_id.required'  => 'El ID del icono es requerida',
            'icon_id.integer'   => 'El id del icono :input debe ser entero.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $unique = !$this->id ? '|unique:categories_product' : '';

        return [
            'name' => "required|string{$unique}",
            'icon_id' => 'required|integer'
        ];
    }
}
