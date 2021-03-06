<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function places()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }
}
