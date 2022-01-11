<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name.required' => 'Tên không được để trống!',
            'email.required' => 'Email không được để trống',
            'password.required' => 'Địa chỉ không được để trống',
            'password.min' => 'Địa chỉ phải có tối thiểu 6 ký tự',
            'birthday.required'=> 'Ngày sinh không được để trống',
            'phone.required'=> 'Số điện thoại không được để trống'
        ];
    }
}
