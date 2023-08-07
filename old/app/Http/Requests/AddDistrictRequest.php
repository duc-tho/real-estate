<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDistrictRequest extends FormRequest
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
            'name'=>'unique:district,Name',
            'slug'=>'unique:district,Slug'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Tên Quận\Huyện đã tồn tại, vui lòng nhập một tên khác...',
            'slug.unique'=>'Tên slug đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
