<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wrapping extends Model
{
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }
}
