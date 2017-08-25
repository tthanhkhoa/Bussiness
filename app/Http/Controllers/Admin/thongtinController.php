<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\thongtin;
use App\slider;
use Illuminate\Support\Facades\Validator;
use App\Constant;

class thongtinController extends Controller
{
    //
    function uploadFile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'upload' => 'required|image',
        ]);
        // Nếu validate fail thì return thông báo lỗi
        if ($validator->fails()) {
            // gộp mảng errors thành chuỗi, cách nhau bởi dấu cách
            $message = implode(' ', $validator->errors()->all());

            return [
                'status' => false,
                'url' => '',
                'message' => 'Upload fail! ' . $message,
            ];
        }

        if($request->hasFile('upload')){
            \Cloudder::upload($request->file('upload'));
            $c=\Cloudder::getResult();
            $image = new slider;
            $image->{Constant::CL_IMAGE_URL} = $c[Constant::N_URL];
            $image->save();
            return $image;
        }
        return 2;
    }

    function getThongTin(){
        try{
            $thongtin = thongtin::orderBy(Constant::CL_ID,'desc')->first();
            return view('client.about',compact('thongtin'));
        }catch (\Exception $e){
            return($e->getMessage());
        }
    }
}
