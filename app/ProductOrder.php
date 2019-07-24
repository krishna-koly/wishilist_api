<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    public function order_details()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
