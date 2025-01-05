<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusStatus extends Model
{
    //
    protected $fillable = [
        'status',
        'departure',
        'arrival',
        'trip_id',
        'conductor_id',
    ];
    public function conductor() :BelongsTo
    {
        return $this->belongsTo(User::class, 'conductor_id');
    }
}

