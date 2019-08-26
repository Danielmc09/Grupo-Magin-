<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validacion extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:30|unique:medicamentos,nombre' . $this->route('id'),
            'proveedor' => 'required|max:30',
            'laboratorio' => 'required|max:30',
            'stock' => 'required'
        ];
    }
}