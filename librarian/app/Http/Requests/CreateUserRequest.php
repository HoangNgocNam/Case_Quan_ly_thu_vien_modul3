<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required|min:6",
            "birthday"=>"required|date",
            "phone"=>"required|Numeric",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Tên không được để trống',
            'password.min' => 'password phải có ít nhất 6 ký tự',
            'password.required' => 'password không được để trống',
            'birthday.required' => 'birthday không được để trống',
            'phone.required' => 'phone không được để trống',

        ];
    }
}
