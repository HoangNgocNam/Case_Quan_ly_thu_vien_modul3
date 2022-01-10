<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'name' => 'Không được để trống tên!',
            'desc' => 'Không được để trống mô tả!',
            'category_id' => 'Không được để trống id thể loại!',
            'publisher_id' => 'Không được để trống nhà xuất bản!',
        ];
    }
}
