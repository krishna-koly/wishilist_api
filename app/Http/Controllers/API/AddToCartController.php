<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddToCartController extends Controller
{
    function cart(Request $request){
       // return $request->cart[0];
       // return $request->optional['shipping'];
        if(!$request->cart) { 
        return response()->json('cart is empty', 404); }
        else {
        return response()->json($request->cart, 200);}
       foreach($request->cart as $value){
           $pro = $value;
       }
       return $pro['optional']['size'];
     }
}
