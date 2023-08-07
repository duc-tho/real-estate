<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            'Name'=>'unique:category,Name',
            'Slug'=>'unique:category,Slug',
        ];
    }

    public function messages()
    {
        return[
            'Name.unique'=>'Tên danh mục đã tồn tại, vui lòng nhập một tên khác...',
            'Slug.unique'=>'Tên slug đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
