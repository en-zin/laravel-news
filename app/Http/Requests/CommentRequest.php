<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
         'comment' => 'required|max:50',
        ];
    }

    public function messages()
    {
        return
        [

            'comment.required' => 'コメントは必須です',
            'comment.max' => 'コメントは50文字までです.',
            // 'comment.string' => 'お前の行動は見切っている',

        ];
    }
}
