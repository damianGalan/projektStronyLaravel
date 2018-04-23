<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidation extends FormRequest
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
            'osoba' => 'required|max:50|unique:sites',
            'adres' => 'required|max:50',
            'numer' => 'required|min:9|max:12|unique:sites'
        ];
    }

    public function messages(){
        return[
            'osoba.required' => 'Nie podano imienia lub nazwiska',
            'osoba.max' => 'Wproawdzono za dużo znaków',
            'osoba.unique' => 'Taka osoba już istnieje',
            'adres.required' => 'Nie podano adresu',
            'adres.max' => 'Podano za dużo znaków',
            'numer.required' => 'Nie podano numeru',
            'numer.min' => 'Wprowadzono za mało znaków',
            'numer.max' => 'Wprowadzono za dużo znaków',
            'numer.unique' => 'Taki numer został już wprowadzony'
        ];
    }
}
