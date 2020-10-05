<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StreetEditRequest extends FormRequest
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
            'Name'=>'unique:street,Name',
            'Slug'=>'unique:street,Slug',
            
            'Name'=>'unique:street,Name,'.$this->segment(4).',StreetId',
            'Slug'=>'unique:street,Slug,'.$this->segment(4).',StreetId'
        ];
    }
    public function messages()
    {
        return[
            'Name.unique'=>'Tên đường đã tồn tại, vui lòng nhập một tên khác...',
            'Slug.unique'=>'Tên slug đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
