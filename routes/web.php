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
    return view('client.home');

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

Route::get('/login', function () {
    return view('login');
});


Route::get('/danhsachtheloai', function () {
    return view('admin.SanPham.theloai');
});

Route::get('/danhsachsanpham', function () {
    return view('admin.SanPham.sanpham');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/nhacungcap', function () {
    return view('admin.SanPham.nhacungcap');
});

Route::get('/danhsachkhachhang', function () {
    return view('admin.KhachHang.khachhang');
});

Route::get('/hoadon', function () {
    return view('admin.KhachHang.hoadon');
});