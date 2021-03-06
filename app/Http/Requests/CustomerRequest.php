<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *pour sa marche il faut mettre return a true.
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
            'nom' => 'required|min:2',
            'prenom' => 'required|min:2',
            'phone' => 'required|min:9|max:15',
            'email' => 'required|email',
            'password' => 'required|min:4|max:15'
        ];
    }
}
