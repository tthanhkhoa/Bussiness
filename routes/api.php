<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/danhsachtheloai_api', 'Admin\TheLoaiController@getTheLoai_api')->name('danhsachtheloai_api');
Route::get('/danhsachncc_api', 'Admin\TheLoaiController@getNhanHieu')->name('danhsachncc_api');
Route::post('/addsanpham_api', 'Admin\SanPhamController@addSanPham')->name('addsanpham_api');
Route::post('/editsanpham_api', 'Admin\SanPhamController@editSanPham')->name('editsanpham_api');

Route::post('/addnhanhieu_api', 'Admin\NhaCungCapController@addNhaCungCap')->name('addnhanhieu_api');
Route::post('/editnhanhieu_api', 'Admin\NhaCungCapController@editNhaCungCap')->name('editnhanhieu_api');
Route::post('/deletenhanhieu_api', 'Admin\NhaCungCapController@deleteNhaCungCap')->name('deletenhanhieu_api');


Route::post('/addkhachhang_api', 'Admin\KhachHangController@addKhachHang')->name('addkhachhang_api');
Route::post('/editkhachhang_api', 'Admin\KhachHangController@editKhachHang')->name('editkhachhang_api');
Route::post('/deletekhachhang_api', 'Admin\KhachHangController@deleteKhachHang')->name('deletekhachhang_api');


Route::post('/addhoadon_api', 'Admin\HoaDonController@addHoaDon')->name('addhoadon_api');
//Route::post('/addImages_api', 'Controller@storageImage')->name('addImages_api');
Route::post('/addImages_api', 'Controller@uploadFile')->name('addImages_api');
Route::post('/addImages_slider_api', 'Admin\thongtinController@uploadFile')->name('addImages_slider_api');
Route::get('/getclient', 'Client\SanPhamController@getLocation')->name('getclient');







