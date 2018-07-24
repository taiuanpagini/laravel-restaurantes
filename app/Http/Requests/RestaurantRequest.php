<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'name' => 'required|min:3|max:40',
            'address' => 'required|min:10',
            'description' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo nome é obrigatório!',
            'address.required' => 'Campo endereço é obrigatório!',
            'description.required' => 'Campo descrição é obrigatório!',
            '*.min' => "Quantidade mínima de caracteres é 10!"
        ];
    }

}
