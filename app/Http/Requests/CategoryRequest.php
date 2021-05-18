<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
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
    public function rules(Request $request)
    {   
        $cat_id = $request->id;
        return [
            //
            'name' => 'bail | required | max: 50 | unique:category,name,'.$cat_id.',id',
            'desc' => 'bail | required | max: 255'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên danh mục không được bỏ trống.',
            'name.max' => 'Tên danh mục không được vượt quá 50 kí tự.',
            'name.unique' => 'Tên danh mục không được trùng.',
            'desc.required' => 'Mô tả danh mục không được bỏ trống.',
            'desc.max' => 'Mô tả danh mục không được bvượt quá 255 kí tự.'
        ];
    }
}
