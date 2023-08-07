<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCityRequest extends FormRequest
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
            'name'=>'unique:city,Name',
            'slug'=>'unique:city,Slug',
            
            'name'=>'unique:city,Name,'.$this->segment(4).',CityId',
            'slug'=>'unique:city,Slug,'.$this->segment(4).',CityId'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Tên Thành Phố đã tồn tại, vui lòng nhập một tên khác...',
            'slug.unique'=>'Tên slug đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
