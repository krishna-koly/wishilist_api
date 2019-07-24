<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'product' => 'App\Product',
    'wrapping' => 'App\Wrapping',
]);

class Image extends Model
{
    public function Imageable()
    {
        return $this->morphTo();
    }
}
