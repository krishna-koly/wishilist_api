<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SubcategoriousProductResource;
use App\SubCategory;

class SubcategoriousProductController extends Controller
{
    public function Subcategorious_products($subcategory){
        $products = SubCategory::where('name', $subcategory)->first()->products()->paginate(20);
       // return collect($products);
        return  SubcategoriousProductResource::collection($products);
       }
       public function Subcategorious_product($subcategory, $id){
        $products = SubCategory::where('name', $subcategory)->first()->products;
        $product = $products->where('id', $id)->first();
        return new SubcategoriousProductResource($product);
       }
}
