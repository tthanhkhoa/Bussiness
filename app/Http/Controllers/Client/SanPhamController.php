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
use Lang;

class MyStruct {
    public $as;
    public $city;
    public $country;
    public $countryCode;
    public $isp;
    public $lat;
    public $lon;
    public $query;
    public $region;
    public $regionName;
    public $timezone;
    public $zip;
}

class SanPhamController extends Controller
{

    //
    function getPageHome(){
        try{
            $TheLoai = theLoai::all();
            $sanpham = sanpham::orderBy(Constant::CL_ID,'desc')->paginate(10);
            $thongtin = thongtin::orderBy(Constant::CL_ID,'desc')->first();
            $slider = slider::all();
            return view('client.home',compact('TheLoai','sanpham','thongtin','slider'));
        }catch (\Exception $e){
            return($e->getMessage());
        }
    }

    function getLocation(){
        /* If your visitor comes from proxy server you have use another function
        to get a real IP address: */
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $getIP = trim(end($ip));
        }
        else {
            $getIP = $_SERVER['REMOTE_ADDR'];
        }
        //$data = \Location::get($getIP);
        $response= file_get_contents('http://ip-api.com/json/'.$getIP);
        $data = json_decode($response);
        $result = new MyStruct();
        try{
            $result->as = $data->as;
            $result->city = $data->city;
            $result->country = $data->country;
            $result->countryCode = $data->countryCode;
            $result->isp = $data->isp;
            $result->lat = $data->lat;
            $result->lon = $data->lon;
            $result->org = $data->org;
            $result->query = $data->query;
            $result->region = $data->region;
            $result->regionName = $data->regionName;
            $result->timezone = $data->timezone;
            $result->zip = $data->zip;
            return response()->json($data);
        }catch (\Exception $e){
            return response()->json(['code'=>200, ' message '=>Lang::get('validation.error_location')]);
        }

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
