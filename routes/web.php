<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return 'this is products page';
});
Route::get('/carts', function () {
    return 'This is carts page <a href="/protected-route">Protected Page</a>';
});
Route::get('/contacts', function () {
    return 'this is contact page';
});
Route::get('/protected-route', function () {
    return 'this is protected-route';
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
