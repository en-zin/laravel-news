<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            //
	     'title' => 'required|max:10',
         'text' => 'required|max:50',


        ];
    }

    public function messages()
    {
        return
        [
            'title.required' => 'タイトルは必須です',
            'title.max' => 'タイトルは10文字までです',

            'text.required' => '記事は必須です',
            'text.max' => '記事は50文字までです',
            
        ];
    }
}
