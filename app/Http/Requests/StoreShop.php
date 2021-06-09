<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShop extends FormRequest
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
            'name' => 'required',
            'access' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '施設名を入力して下さい。',
            'access.required' => 'アクセスを入力して下さい。',
        ];
    }
}
