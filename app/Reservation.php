<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function places()
    {
        return $this->belongsTo(Place::class, 'place');
    }
}
