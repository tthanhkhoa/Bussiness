<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Constant;
use App\theLoai;
use App\nhanHieu;
use App\sanpham;
use App\Images;
use App\thongtin;
use App\slider;


class SanPhamController extends Controller
{
    //
    function getPageHome(){
        try{
            $TheLoai = theLoai::all();
            $sanpham = sanpham::orderBy(Constant::CL_ID,'desc')->paginate(10);
            $thongtin = thongtin::orderBy(Constant::CL_ID,'desc')->first();
            $slider = slider::all();
//            $ip= Request::ip();
//            $ip = \Request::getClientIp();
            $ip = trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
            return $ip;
//            $data = \Location::get('10.152.233.4');
            $data = \Location::get('171.249.122.108');
            dd($data);
            return view('client.home',compact('TheLoai','sanpham','thongtin','slider'));
        }catch (\Exception $e){
            return($e->getMessage());
        }
    }

    function chiTietSanPham(Request $request){
        try{
            $TheLoai = theLoai::all();
//            $getSanPham = sanpham::with('chiTietSanPham')
//            ->where([[Constant::CL_ID,'=',$request->{Constant::CL_ID}]])->first();
            $getSanPham = sanpham::where([[Constant::CL_ID,'=',$request->{Constant::CL_ID}]])->first();
            $thongtin = thongtin::orderBy(Constant::CL_ID,'desc')->first();
            $slider = slider::all();
//            return $getSanPham;

//            return $getSanPham->chiTietSanPham->gioithieusanpham;
            return view('client.chitietsanpham',compact('TheLoai','getSanPham','thongtin','slider'));
        }catch (\Exception $e){
            return($e->getMessage());
        }
    }
}
