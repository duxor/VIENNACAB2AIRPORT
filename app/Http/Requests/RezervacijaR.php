<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RezervacijaR extends Request
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
            'ime'=>'required',
            'email'=>'required',
            'telefon'=>'required',
            'region_id'=>'required',
            'kvart_id'=>'required',
            'ulica_id'=>'required',
            'vrijeme'=>'required',
            'vozilo'=>'required',
        ];
    }
}
