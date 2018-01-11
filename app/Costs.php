<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costs extends Model
{
    protected $fillable = [
        'name',
        'kind',
        'cost_property',
        'data_costs',
        'user_id',
    ];
}
