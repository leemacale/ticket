<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusPosition extends Model
{
    //
    protected $fillable = [
        'long',
        'lat',
        'trip_id',
    ];
}
