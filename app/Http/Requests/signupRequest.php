<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255|string',
            'age'=>'numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.string'=>'vui long dien ten cho dung',
            'age.numeric'=>'vui long nhap tuoi cho dung'
        ];
    }
}
