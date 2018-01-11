<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenues extends Model
{
    protected $fillable = [
        'full_name',
        'birth',
        'card',
        'type_of_income',
        'amount_income',
        'source_income',
        'user_id',
    ];
}
