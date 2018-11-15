<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
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
            'nombre_comp'=>'required|max:50',
            'cedula'=>'required|max:8',
            'fecha_nac'=>'required',
            'fecha_reg'=>'required',
            'correo'=>'required|max:50',

        ];
    }
}
