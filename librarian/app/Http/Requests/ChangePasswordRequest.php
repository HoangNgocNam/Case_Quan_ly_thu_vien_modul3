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
            'currentPassword' => 'Mật khẩu không khớp!',
            'newPassword' => 'Độ dài mật khẩu tối thiểu phải có 3 ký tự!|min:3',
            'confirmPassword' => 'Xác nhận lại mật khẩu!|same:newPassword',
        ];
    }
}
