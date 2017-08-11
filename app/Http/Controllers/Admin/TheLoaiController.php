<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\theloai;
use App\Constant;

class TheLoaiController extends Controller
{
    //
    function getTheLoai(){
        $TheLoai = theloai::orderBy(Constant::TBL_MaTheLoai,'desc')->paginate(15);
        return view('admin.SanPham.theloai',compact('TheLoai'));
    }

    function addTheLoai(Request $request){

        $addTheLoai = new theloai;
       // $addTheLoai->{Constant::TBL_MaTheLoai} = $request->{Constant::TBL_MaTheLoai};
        $addTheLoai->{Constant::TBL_tenTheLoai} = $request->{Constant::TBL_tenTheLoai};

        $addTheLoai->{Constant::TBL_Active} = $request->{Constant::TBL_Active};

        $addTheLoai->save();
//        return 1;
        return response()->json(['result'=>$addTheLoai]);
    }

    function editTheLoai(Request $request){

        $editTheLoai = theloai::find($request->{Constant::TBL_MaTheLoai});
        $editTheLoai->{Constant::TBL_tenTheLoai} = $request->{Constant::TBL_tenTheLoai};
        $editTheLoai->{Constant::TBL_Active} = $request->{Constant::TBL_Active};
        $editTheLoai->save();
        return response()->json(['result'=>$editTheLoai]);
    }

    function deleteTheLoai(Request $request){
        $id = $request->{Constant::TBL_MaTheLoai};
        $deleteTheLoai = theloai::where('maTheLoai', $id)->delete();
        return response()->json(['result'=>1]);
    }

    function getTheLoai_api(){
        $TheLoai = theloai::orderBy(Constant::TBL_MaTheLoai,'desc')->get();
        return response()->json(['result'=>$TheLoai]);
//        return view('admin.SanPham.theloai',compact('TheLoai'));
    }


}
