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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
   // return 1;
    //return view('admin.dashboash');
    return view('client.home');
});

Route::get('/admin', function () {
    return view('admin.dashboash');
});

Route::get('a', function(){
    return view('client.compoment.header');
});