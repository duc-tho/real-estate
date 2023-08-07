<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectEditRequest extends FormRequest
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
            'Title'=>'unique:project,Title',
            'Slug'=>'unique:project,Slug',
            
            'Title'=>'unique:project,Title,'.$this->segment(4).',ProjectId',
            'Slug'=>'unique:project,Slug,'.$this->segment(4).',ProjectId'
        ];
    }

    public function messages()
    {
        return[
            'Title.unique'=>'Tên dự án đã tồn tại, vui lòng nhập một tên khác...',
            'Slug.unique'=>'Tên slug đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
