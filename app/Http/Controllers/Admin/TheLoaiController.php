<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\theLoai;
use App\Constant;
use App\nhanhieu;

class TheLoaiController extends Controller
{
    //
    function getTheLoai(){
        $TheLoai = theLoai::orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.SanPham.theloai',compact('TheLoai'));
    }

    function addTheLoai(Request $request){
        try{
            $addTheLoai = new theLoai;
            $addTheLoai->{Constant::CL_ID} = $request->{Constant::CL_MATHELOAI};
            $addTheLoai->{Constant::CL_TENTHELOAI} = $request->{Constant::CL_TENTHELOAI};
            $addTheLoai->{Constant::CL_ACTIVE} = $request->{Constant::CL_ACTIVE};
            $addTheLoai->save();
            return response()->json(['result'=>$addTheLoai]);
        }catch (\Exception $e){
            return response()->json(['result'=>0]);
        }

    }

    function editTheLoai(Request $request){
        try{
            $editTheLoai = theLoai::find($request->{Constant::CL_ID});
            $editTheLoai->{Constant::CL_TENTHELOAI} = $request->{Constant::CL_TENTHELOAI};
            $editTheLoai->{Constant::CL_ACTIVE} = $request->{Constant::CL_ACTIVE};
            $editTheLoai->save();
            return response()->json(['result'=>$editTheLoai]);
        }catch (\Exception $e){
            return response()->json(['result'=>0]);

        }
//        return $request->{Constant::CL_ID};

    }

    function deleteTheLoai(Request $request){
        try{
            $id = $request->{Constant::CL_ID};
            $deleteTheLoai = theLoai::where('id', $id)->delete();
            return response()->json(['result'=>1]);
        }catch (\Exception $e){
            return response()->json(['result'=>0]);

        }

    }

    function getTheLoai_api(){
        $TheLoai = theLoai::orderBy(Constant::CL_ID,'desc')->get();
        return response()->json(['result'=>$TheLoai]);

    }
    function getNhanHieu(){
        try{
            $ncc     = nhanhieu::orderBy(Constant::CL_ID,'desc')->get();
            return response()->json(['result'=>$ncc]);
        }catch (\Exception $e){

        }
    }


}
