<?php

namespace App\Http\Controllers\Client;

use App\Location;
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
//            $this->getLocation();
            $theloai = theLoai::all();
            $sanpham = sanpham::orderBy(Constant::CL_ID,'desc')->paginate(10);
            $thongtin = thongtin::orderBy(Constant::CL_ID,'desc')->first();
            $slider = slider::all();
            return view('client.home',compact('theloai','sanpham','thongtin','slider'));
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
        $result = new Location;
        try{
            $result->{Constant::CL_AS} = $data->{Constant::CL_AS};
            $result->{Constant::CL_CITY} = $data->{Constant::CL_CITY};
            $result->{Constant::CL_COUNTRY} = $data->{Constant::CL_COUNTRY};

            $result->{Constant::CL_COUNTRYCODE} = $data->countryCode;
            $result->{Constant::CL_ISP} = $data->{Constant::CL_ISP};

            $result->{Constant::CL_LAT} = $data->{Constant::CL_LAT};

            $result->{Constant::CL_LON} = $data->{Constant::CL_LON};
            $result->{Constant::CL_ORG} = $data->{Constant::CL_ORG};
            $result->{Constant::CL_QUERY} = $data->{Constant::CL_QUERY};
            $result->{Constant::CL_REGION} = $data->{Constant::CL_REGION};
            $result->{Constant::CL_REGIONNAME} = $data->regionName;
            $result->{Constant::CL_TIMEZONE} = $data->{Constant::CL_TIMEZONE};
            $result->{Constant::CL_ZIP} = $data->{Constant::CL_ZIP};
            $result->save();
            return response()->json($result);
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
