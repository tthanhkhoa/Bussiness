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
//            $ip= \Request::ip();

            return view('client.home',compact('TheLoai','sanpham','thongtin','slider'));
        }catch (\Exception $e){
            return($e->getMessage());
        }
    }

    function getLocation(){
        //            $ip = file_get_contents('http://api.ipify.org');
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $getIP = trim(end($ip));
        }
        else {
            return response()->json(['result'=>$_SERVER['REMOTE_ADDR']]);
        }
        $data = \Location::get($getIP);
        $collection = collect(['ip'=> $getIP,'Location'=>$data]);
        return response()->json(['result'=>$collection]);
    }

    function chiTietSanPham(Request $request){
        try{
            $TheLoai = theLoai::all();
            $getSanPham = sanpham::where([[Constant::CL_ID,'=',$request->{Constant::CL_ID}]])->first();
            $thongtin = thongtin::orderBy(Constant::CL_ID,'desc')->first();
            $slider = slider::all();
            return view('client.chitietsanpham',compact('TheLoai','getSanPham','thongtin','slider'));
        }catch (\Exception $e){
            return($e->getMessage());
        }
    }
}
