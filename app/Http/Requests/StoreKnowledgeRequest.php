<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKnowledgeRequest extends FormRequest
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
            'title'         => "required|max:65",
            'description'   => "required",
            'type'          => "required",
            'version'       => "required",
            'language_id'   => "required",
            'code'          => "required",
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => ' عنوان را وارد کنید',
            'title.max'             => 'عنوان نباید بیش از 65 کاراکتر باشد',
            'description.required'  => 'توضیحات را وارد کنید',
            'type.required'         => 'نوع کد را وارد کنید',
            'version.required'      => 'ورژن را وارد کنید',
            'language_id.required'  => 'زبان برنامه نویسی را انتخاب کنید',
            'code.required'         => 'کد ها را وارد کنید',
        ] ;
    }
}
