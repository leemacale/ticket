<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dashcam extends Model
{
    //

    protected $fillable = [
        'trip_id',
        'filepath'
       
    ];

    public function trip() :BelongsTo
    {
        return $this->belongsTo(Trip::class, 'trip_id',);
    }
}
