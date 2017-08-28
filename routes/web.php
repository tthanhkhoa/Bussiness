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

//Route::get('/home', function () {
//    return view('client.home');
//});
// Route::get('/', function () {
//    // return 1;
//     //return view('admin.dashboash');
//    // return view('client.home');
//     return view('client.home');

//     return view('client.product-details');
// });

Route::get('/admin', function () {
    return view('admin.dashboash');
});
Route::get('/cart', function () {
    return view('client.cart');
});

Route::get('/chitietsanpham', function(){
    return view('client.chitietsanpham');
});

Route::get('/login', function () {
    return view('login');
});
/*
 * Admin The Loai
 * */

Route::get('/danhsachtheloai', 'Admin\TheLoaiController@getTheLoai')->name('danhsachtheloai');
Route::post('/addtheloai', 'Admin\TheLoaiController@addTheLoai')->name('addtheloai');
Route::post('/deletetheloai', 'Admin\TheLoaiController@deleteTheLoai')->name('deletetheloai');
Route::post('/updatetheloai', 'Admin\TheLoaiController@editTheLoai')->name('updatetheloai');



/*
 * Admin San Pham
 * */
Route::get('/tatcasanpham', 'Admin\SanPhamController@getSanPham')->name('tatcasanpham');
Route::get('/sanphamid/{id}', 'Admin\SanPhamController@getSanPhamById')->name('sanphamid');
Route::post('/deletesanpham', 'Admin\SanPhamController@deleteSanPham')->name('deletesanpham');
Route::get('/gallery/{masanpham}', 'Admin\SanPhamController@getImageSP')->name('gallery');
Route::get('admin/chitietsanpham/{id}', 'Admin\SanPhamController@chiTietSanPham')->name('chitiet');



/*
 * Admin Nha Cung Cap
 * */
Route::get('/danhsachnhacungcap', 'Admin\NhaCungCapController@getNhaCungCap')->name('danhsachnhacungcap');

/*
 * Admin Khach Hang
 * */
Route::get('/danhsachkhachhang', 'Admin\KhachHangController@getKhachHang')->name('danhsachkhachhang');


/*Admin Hoa Don*/
Route::get('/danhsachhoadon', 'Admin\HoaDonController@getHoaDon')->name('danhsachhoadon');
Route::get('/hoadonchuaduyet', 'Admin\HoaDonController@getHoaDonChuaDuyet')->name('hoadonchuaduyet');
Route::get('/hoadondaduyet', 'Admin\HoaDonController@getHoaDonDaDuyet')->name('hoadondaduyet');
Route::get('/chitiethoadon/{id}', 'Admin\HoaDonController@getChiTietHoaDon')->name('chitiethoadon');
Route::get('/deletehoadon/{id}', 'Admin\HoaDonController@deleteHoaDon')->name('deletehoadon');


Route::get('/about', 'Admin\thongtinController@getThongTin')->name('about');





//Route::get('/danhsachtheloai', function () {
//
//  //  return view('admin.SanPham.theloai');
//});

//Route::get('/chitietsanpham', function () {
//    return view('admin.SanPham.detail_sp');
//});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/nhacungcap', function () {
    return view('admin.SanPham.nhacungcap');
});



//Route::get('/chitiethoadon', function () {
//    return view('admin.KhachHang.chitiethoadon');
//});

Route::get('/danhsachnhaphang', function () {
    return view('admin.DoanhThu.danhsach_nhaphang');
});

Route::get('/danhsachbanhang', function () {
    return view('admin.DoanhThu.danhsach_banhang');
});

Route::get('/danhsachhangton', function () {
    return view('admin.DoanhThu.danhsach_hangton');
});

Route::get('/lichsubanhang', function () {
    return view('admin.DoanhThu.lichsu_banhang');
});

Route::get('/', 'Client\SanPhamController@getPageHome')->name('home');

Route::get('/home', 'Client\SanPhamController@getPageHome')->name('home');
Route::get('/chitietsanpham/{id}', 'Client\SanPhamController@chiTietSanPham')->name('chitietsanpham');
Route::get('/getclient', 'Client\SanPhamController@getLocation')->name('getclient');


