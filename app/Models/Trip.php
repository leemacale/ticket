<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    //
    protected $fillable = [
        'start',
        'destination',
        'date',
        'time',
        'bus',
        'company_id',
        'price',
    ];

    public function company() :BelongsTo
    {
        return $this->belongsTo(Companies::class, 'company_id',);
    }

  
}
