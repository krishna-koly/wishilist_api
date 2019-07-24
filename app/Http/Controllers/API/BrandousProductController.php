<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BrandousProductResource;
use App\Brand;

class BrandousProductController extends Controller
{
    public function brandous_products($brand){
        $products = Brand::where('name', $brand)->first()->products()->paginate(1);
       // return collect($products);
        return  BrandousProductResource::collection($products);
       }
       public function brandous_product($brand, $id){
        $products = Brand::where('name', $brand)->first()->products;
        $product = $products->where('id', $id)->first();
        return new BrandousProductResource($product);
       }
}
