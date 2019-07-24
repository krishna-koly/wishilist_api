<?php

use Illuminate\Http\Request;
use App\User;


/*
|--------------------------------------------------------------------------s
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function(Request $request) {
//    return $request->user();
// });

Route::get('/users', function (){
   return User::get();
})->middleware('auth:api');

Route::apiResource('/categories', 'API\CategoryController');
Route::apiResource('/offers', 'API\OfferController');

Route::apiResource('/sub-categories', 'API\SubCategoryController');
Route::apiResource('/brands', 'API\BrandController');
Route::apiResource('/products', 'API\ProductController');
Route::apiResource('/wrappings', 'API\WrippingController');
Route::get('/colors', function (Request $request) {
   //dd(Request());
   $colors = collect(array_rand(App\Color::get()->toArray(), 3));
   //$colors = array_rand($colors,3);
    //return is_array($colors)? 'true': 'false';
    return $colors->map(function ($items, $key){
       return $items + 1;
    });

});

Route::get('{category}/categorious-products', 'API\CategoriousProductController@categorious_products')->name('categorious_products');
Route::get('{category}/categorious-products/{id}', 'API\CategoriousProductController@categorious_product')->name('categorious_product');
Route::get('{subcategory}/subcategorious-products', 'API\SubcategoriousProductController@Subcategorious_products')->name('subcategorious_products');
Route::get('{subcategory}/subcategorious-products/{id}', 'API\SubcategoriousProductController@Subcategorious_product')->name('subcategorious_product');
Route::get('{brand}/brandous-products', 'API\BrandousProductController@brandous_products')->name('brandous_products');
Route::get('{brand}/brandous-products/{id}', 'API\BrandousProductController@brandous_product')->name('brandous_product');
Route::get('{offer}/offerable-products', 'API\OfferableProductController@offerable_products')->name('offerable_products');
Route::get('{offer}/offerable-products/{id}', 'API\OfferableProductController@offerable_product')->name('offerable_product');

Route::post('/addtocart', 'API\AddToCartController@cart')->name('cart');