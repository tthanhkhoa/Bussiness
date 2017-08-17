<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\khachhang;
use App\Constant;

class KhachHangController extends Controller
{
    //
    function getKhachHang(){
        $khachhang = khachHang::orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.KhachHang.khachhang',compact('khachhang'));
    }

    function addKhachHang(Request $request){
        $add = new khachHang;
        $add->{Constant::CL_TENKHACHHANG} = $request ->{Constant::CL_TENKHACHHANG};
        $add->{Constant::CL_NGAYSINH} = $request ->{Constant::CL_NGAYSINH};
        $add->{Constant::CL_DIACHI} = $request ->{Constant::CL_DIACHI};
        $add->{Constant::CL_SDT} = $request ->{Constant::CL_SDT};
        $add->{Constant::CL_EMAIL} = $request ->{Constant::CL_EMAIL};
        $add->{Constant::CL_ACTIVE} = $request ->{Constant::CL_ACTIVE};
        $add->save();
        return response()->json(['result'=>$add]);

    }

    function editKhachHang(Request $request){
        $edit = khachHang::find($request->{Constant::CL_ID});
        $edit->{Constant::CL_TENKHACHHANG} = $request ->{Constant::CL_TENKHACHHANG};
        $edit->{Constant::CL_NGAYSINH} = $request ->{Constant::CL_NGAYSINH};
        $edit->{Constant::CL_DIACHI} = $request ->{Constant::CL_DIACHI};
        $edit->{Constant::CL_SDT} = $request ->{Constant::CL_SDT};
        $edit->{Constant::CL_EMAIL} = $request ->{Constant::CL_EMAIL};
        $edit->save();
        return response()->json(['result'=>$edit]);

    }

    function deleteKhachHang(Request $request){
        $id = $request->{Constant::CL_ID};
        $delete = khachHang::where('id', $id)->delete();
        return response()->json(['result'=>1]);
    }
}
