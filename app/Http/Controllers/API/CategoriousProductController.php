<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriousProductResource;
use App\Category;
use Illuminate\Support\Collection;

class CategoriousProductController extends Controller
{
   public function categorious_products($category){
    $products = Category::where('name', $category)->first()->products()->paginate(1);
   // return collect($products);
    return  CategoriousProductResource::collection($products);
   }
   public function categorious_product($category, $id){
    $products = Category::where('name', $category)->first()->products;
    $product = $products->where('id', $id)->first();
    return new CategoriousProductResource($product);
   }
}
