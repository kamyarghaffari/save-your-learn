<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
            'language_name' => 'required|max:20|unique:languages,name'
        ];
    }

    public function messages()
    {
        return [
          'language_name.required' => 'نام زبان برنامه نویسی را وارد کنید'  ,
          'language_name.max' => 'زبان برنامه نویسی نباید بیش از 20 کاراکتر باشد.',
          'language_name.unique' => 'این زبان برنامه نویسی از قبل ایجاد شده است.',
        ];
    }
}
