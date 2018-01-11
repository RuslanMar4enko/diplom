<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataUsersRequest extends FormRequest
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
            'structure_unit' => 'required',
            'name' => 'required',
            'place_of_residence' => 'required',
            'phone' => 'required',
            'pasport_seria' => 'required',
            'issuance_pasport' => 'required',
            'card_taxes' => 'required',
        ];
    }
}
