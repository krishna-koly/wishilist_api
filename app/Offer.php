<?php

namespace App;

 use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Relation;

// // Relation::morphMap([
//     'product' => 'App\Product',
//     'wrapping' => 'App\Wrapping',
// ]);

class Offer extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function wrappings()
    {
        return $this->hasMany('App\wrapping');
    }
}
