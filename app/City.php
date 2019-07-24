<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function shippings()
    {
        return $this->hasMany('App\Shipping');
    }
}
