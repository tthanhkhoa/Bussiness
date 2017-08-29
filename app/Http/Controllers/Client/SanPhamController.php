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
//            $ip= \Request::ip();

            return view('client.home',compact('TheLoai','sanpham','thongtin','slider'));
        }catch (\Exception $e){
            return($e->getMessage());
        }
    }

    function getLocation(){
        //$ip = file_get_contents('http://api.ipify.org');
//        $result = new MyStruct();
//        $result->as = 'Tp HCM';
//        return response()->json($result);
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $getIP = trim(end($ip));
        }
        else {
            return response()->json(['result'=>$_SERVER['REMOTE_ADDR']]);
        }
        //$data = \Location::get($getIP);
        $response= file_get_contents('http://ip-api.com/json/'.$getIP);
        $data = json_decode($response);
        return $data['as'];
        $result = new MyStruct();
        $result->as = $data->as;
        $result->city = $data->city;
        $result->country = $data->country;
        $result->isp = $data->isp;
        $result->lat = $data->isp;
        $result->lon = $data->isp;
        $result->org = $data->isp;
        $result->query = $data->isp;
        $result->region = $data->isp;
        $result->regionName = $data->isp;
        $result->timezone = $data->isp;
        $result->zip = $data->zip;

//        $collection = collect(['ip'=> $getIP,'location'=>$data]);
        return $result;
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
