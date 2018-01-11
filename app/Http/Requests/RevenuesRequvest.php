<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RevenuesRequvest extends FormRequest
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
            'full_name' => 'required',
            'birth' => 'required',
            'card' => 'required',
            'type_of_income' => 'required',
            'amount_income' => 'required',
            'source_income' => 'required',
        ];
    }
}
