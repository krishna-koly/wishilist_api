<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OfferableProductResource;
use App\Offer;

class OfferableProductController extends Controller
{
    public function offerable_products($offer){
        $products = Offer::where('title', $offer)->first()->products;
       // return collect($products);
        return  OfferableProductResource::collection($products);
       }
       public function offerable_product($offer, $id){
        $products = Offer::where('title', $offer)->first()->products;
        $product = $products->where('id', $id)->first();
        return  new OfferableProductResource($product);
       }
}
