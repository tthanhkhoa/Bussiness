<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Constant;
use App\theLoai;
use App\nhanHieu;
use App\sanPham;
use App\Images;
use App\thongtin;
use App\slider;


class SanPhamController extends Controller
{
    //
    function getPageHome(){
        try{
            $TheLoai = theLoai::all();
            $sanpham = sanPham::orderBy(Constant::CL_ID,'desc')->paginate(10);
            $thongtin = thongtin::orderBy(Constant::CL_ID,'desc')->first();
            $slider = slider::all();
           // return $slider;
            return view('client.home',compact('TheLoai','sanpham','thongtin','slider'));
//                compact('sanpham'),compact('thongtin'));
        }catch (\Exception $e){
            return($e->getMessage());
        }
    }
}
