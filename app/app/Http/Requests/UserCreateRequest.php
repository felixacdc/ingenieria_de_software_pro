<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'user' => 'required',
            'password' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'numeric|min:8',
            'email' => 'unique:users,email',
            'centro_id' => 'required',
            'tipo_usuario_id' => 'required'
        ];
    }
}
