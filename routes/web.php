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

Route::get('/home', function () {
    return view('client.home');
});
Route::get('/', function () {
   // return 1;
    //return view('admin.dashboash');
   // return view('client.home');
    return view('client.product-details');
});

Route::get('/admin', function () {
    return view('admin.dashboash');
});
Route::get('/cart', function () {
    return view('client.cart');
});

Route::get('/product', function(){
    return view('client.product');
});
Route::get('/about', function(){
    return view('client.about');
});
