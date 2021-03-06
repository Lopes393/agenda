<?php

namespace App\Http\Requests;

use App\Http\Helpers\DataHora;
use App\Http\Helpers\Helper;
use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'celular' =>'required',
        ];
    }
    protected function getValidatorInstance()
    {

        return parent::getValidatorInstance();
    }
}
