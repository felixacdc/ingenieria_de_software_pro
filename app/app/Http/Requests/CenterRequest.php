<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CenterRequest extends Request
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
            'centro' => 'required',
            'direccion' => 'required',
            'telefono' => 'numeric|min:8|max:8',
            'tipo_centro_id' => 'required',
        ];
    }
}
