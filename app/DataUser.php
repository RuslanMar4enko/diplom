<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    protected $fillable = [
        'structure_unit',
        'name',
        'place_of_residence',
        'phone',
        'pasport_seria',
        'issuance_pasport',
        'card_taxes',
        'user_id',
    ];
}
