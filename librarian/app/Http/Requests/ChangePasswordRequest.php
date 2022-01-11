<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'currentPassword' => 'required',
            'newPassword' => 'required|min:5',
            'confirmPassword' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'currentPassword.required' => 'Mật khẩu hiện tại sai',
            'newPassword.required' => 'Mật khẩu tối thiểu phải có 5 ký tự',
            'confirmPassword.required' => 'Mật khẩu không khớp'
        ];
    }
}
