<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HousingCommunal extends Model
{
    protected $fillable = [
        'house',
        'gas',
        'cold_water',
        'hot_water',
        'drainage',
        'centralized_heating',
        'electricity_supply',
        'household_waste_removal',
        'user_id',
    ];
}
