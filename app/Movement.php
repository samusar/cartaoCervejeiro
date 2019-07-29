<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    
    protected $fillable = [
        'client_id', 'provider_id', 'previous_balance', 'value', 'date', 'type_movement_id'
    ];
}
