<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use RemoteImageUploader\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Constant;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadFile(Request $request){
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
            $image = new Images;
            $image->{Constant::CL_MASANPHAM} = $request->{Constant::CL_MASANPHAM};
            $image->{Constant::CL_IMAGE_URL} = $c[Constant::N_URL];
            $image->{Constant::CL_THUMPNAIL_URL} =$c[Constant::N_URL];
            $image->save();

            return $image;
        }
        return 2;
    }
//    public function uploadVideo($file){
//        \Cloudinary::config(array(
//            "cloud_name" => "kerofrogvn",
//            "api_key" => "138455114479573",
//            "api_secret" => "FhaWYL9SHU55uo2H2wkXWw2gHlY"
//        ));
//        //$result = \Cloud
//        $result = \Cloudinary\Uploader::upload($file, array("resource_type" => "video"));
//        return $result;
//    }

    public function storageImage(Request $request)
    {
        // Tạo validate cho $request->upload:
        // - không được trống
        // - là file image
        // - max size là 2345678
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

        try {

//            return $request->upload;
            // Thực hiện create và upload photo với config đã cài sẵn
            $result = Factory::create(config('flickr.host'), config('flickr.auth'));
            $result->upload($request->upload->path());
//            return 1;
            return response()->json($result);

            return [
                'status' => true,
                'url' => $result,
                'message' => 'Upload successfull!',
            ];
        } catch (\Exception $ex) {
            // Nếu bị Exception thì trả về message của Exception đó
            // Exception ở đây có thể là:
            // - host không hợp lệ
            // - api không hợp lệ
            // - xác thực auth không thành công
            // - không có quyền upload
            // - php không enable curl
            return [
                'status' => false,
                'url' => '',
                'message' => 'Upload fail! ' . $ex,
            ];
        }
    }
}
