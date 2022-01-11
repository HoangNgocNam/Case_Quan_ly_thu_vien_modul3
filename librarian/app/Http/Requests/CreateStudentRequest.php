<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            'name' => 'required',
            'student_code' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'birthday' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống!',
            'student_code.required' => 'Mã học sinh không được để trống',
            'email.required' => 'Email không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'birthday.required'=> 'Ngày sinh không được để trống'
        ];
    }
}
