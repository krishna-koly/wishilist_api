<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'color' => 'App\Color',
    'size' => 'App\Size'
]);

class Product extends Model
{
    public function subcategory(){
        return $this->belongsTo('App\SubCategory', 'sub_category_id');
    }
    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }

    public function colors()
    {
        return $this->morphedByMany('App\Color', 'productable');
    }
    public function sizes()
    {
        return $this->morphedByMany('App\Size', 'productable');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
