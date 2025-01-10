<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Food extends Model
{
    protected $fillable = [
        'trip_id',
        'user_id',
        'food_id',

       
    ];


    public function trip() :BelongsTo
    {
        return $this->belongsTo(Trip::class, 'trip_id',);
    }
    public function foodmenu() :BelongsTo
    {
        return $this->belongsTo(Menu::class, 'food_id',);
    }
    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id',);
    }
}
