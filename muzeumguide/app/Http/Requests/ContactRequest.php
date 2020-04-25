<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:200',
            'email' => 'email|max:200',
            'message' => 'required|max:500',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => '名前は必ず入力してください。',
            'email.email'      => 'メールアドレスを入力してください。',
            'message.required' => 'メッセージは必ず入力してください。',
            'max'              => ':max文字以内で入力してください。'
        ];
    }
}
