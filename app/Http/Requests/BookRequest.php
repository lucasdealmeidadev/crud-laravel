<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'title' => 'título',
            'id_user' => 'autor',
            'pages' => 'páginas',
            'price' => 'preço'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:191',
            'id_user' => 'required|numeric|not_in:0',
            'pages' => 'required|integer|not_in:0',
            'price' => 'required|numeric|not_in:0'
        ];
    }
}
