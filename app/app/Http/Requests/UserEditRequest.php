<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Routing\Route;

class UserEditRequest extends Request
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
    public function rules(Route $route)
    {
        return [
            'user' => 'required',
            'password' => 'min:8',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'numeric|min:8',
            'email' => 'unique:users,email,' . $route->getParameter('users'),
            'centro_id' => 'required',
            'tipo_usuario_id' => 'required'
        ];
    }
}
