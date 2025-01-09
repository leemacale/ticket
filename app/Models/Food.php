<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Food extends Model
{
    protected $fillable = [
        'trip_id',
        'order',
        'total',

       
    ];


    public function trip() :BelongsTo
    {
        return $this->belongsTo(Trip::class, 'trip_id',);
    }
}
