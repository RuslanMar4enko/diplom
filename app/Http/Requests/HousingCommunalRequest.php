<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HousingCommunalRequest extends FormRequest
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
            'house' => 'required',
            'gas' => 'required',
            'cold_water' => 'required',
            'hot_water' => 'required',
            'drainage' => 'required',
            'centralized_heating' => 'required',
            'electricity_supply' => 'required',
            'household_waste_removal' => 'required',
        ];
    }
}
