<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ticket extends Model
{
    //
    protected $fillable = [
        'seat',
        'trip_id',
        'user_id',
        'price',
       
    ];
    public function trip() :BelongsTo
    {
        return $this->belongsTo(Trip::class, 'trip_id',);
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id',);
    }
    public function bus() :BelongsTo
    {
        return $this->belongsTo(BusStatus::class, 'trip_id',);
    }
}
