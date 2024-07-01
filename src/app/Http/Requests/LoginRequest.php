<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|max:191',
            'password' => 'required|min:8|max:191'
        ];
    }

    public function messages()
    {
        return 
        [
            'email.required' => 'メールアドレスを入力してください。',

            'email.email' => 'メールアドレスは、有効なメールアドレス形式で指定してください。',

            'password.required' => 'パスワードを入力してください。',

            'password.min:8' => 'パスワードは８文字以上してください。'
        ];
    }
}
