<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAreaRequest extends FormRequest
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
            'name'=>'unique:area,Name',
            'slug'=>'unique:area,Slug',
            
            'name'=>'unique:area,Name,'.$this->segment(4).',AreaId',
            'slug'=>'unique:area,Slug,'.$this->segment(4).',AreaId'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Tên Phường/Xã đã tồn tại, vui lòng nhập một tên khác...',
            'slug.unique'=>'Tên slug đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
