<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserCreateRequest extends FormRequest
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
            //
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string',
            'tel' => 'required',
            'password' => 'required|confirmed|min:8',
            'role' => [
                'required',
                'string',
                'exists:roles,name',
            ]
        ];
    }
}