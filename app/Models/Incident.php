<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Incident extends Model
{
    //
    protected $fillable = [
        'trip_id',
        'location',
        'description',
        'filepath'
       
    ];

    public function trip() :BelongsTo
    {
        return $this->belongsTo(Trip::class, 'trip_id',);
    }
}
