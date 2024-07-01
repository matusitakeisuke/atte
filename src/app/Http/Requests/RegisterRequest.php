<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:0|max:191',
            'email' => 'required|email|unique:users|min:0|max:191',
            'password' => 'required|string|confirmed|min:8|max:191',
        ];
    }

    public function messages()
    {
        return 
        [
            'name.required' => '名前を入力してください。',

            'email.required' => 'メールアドレスを入力してください。',

            'email.email' => 'メールアドレスは、正しい形式で入力してください。',

            'email.unique' => 'このメールアドレスは登録されています。',

            'password.required' => 'パスワードを入力してください。',

            'password.min' => 'パスワードは8文字以上でお願いします。',

            'password.confirmed' => '確認用パスワードが一致していません。',
        ];
    }
}
