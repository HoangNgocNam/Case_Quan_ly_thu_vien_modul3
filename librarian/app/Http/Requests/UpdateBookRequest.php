<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'desc' => 'required',
            'category_id' => 'required',
            'publisher_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'desc.required' => 'Mô tả không được để trống',
            'category_id.required' => 'Thể loại không được để trống',
            'publisher_id.required' => 'Nhà sản xuất không được để trống',
        ];
    }
}
