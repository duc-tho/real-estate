<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditDistrictRequest extends FormRequest
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
        return[
            // 'img'=>'image',
            'name'=>'unique:district,Name',
            'slug'=>'unique:district,Slug',
            
            'name'=>'unique:district,Name,'.$this->segment(4).',DistrictId',
            'slug'=>'unique:district,Slug,'.$this->segment(4).',DistrictId'
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
