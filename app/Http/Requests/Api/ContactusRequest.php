<?php

namespace App\Http\Requests\Api;

class ContactusRequest extends Request
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
            'name' => [ 'required', 'max:30' ],
            'email' => [ 'required', 'email' ],
            'message' => [ 'required', 'max:1000' ],
        ];
    }

    /**
     * Set custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'お名前',
            'email' => 'ご連絡メールアドレス',
            'message' => 'お問い合わせ内容'
        ];
    }
}
