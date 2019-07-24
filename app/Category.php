

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories(){
        return $this->hasMany('App\SubCategory', 'category_id');
    }

    public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\SubCategory');
    }
}
