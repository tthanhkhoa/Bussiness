<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\khachhang;
use app\Constant;

class KhachHangController extends Controller
{
    //
    function getKhachHang(){
        $khachhang = khachhang::orderBy(Constant::TBL_maKhachHang,'desc')->paginate(15);
        return view('admin.KhachHang.khachhang',compact('khachhang'));
    }

    function addKhachHang(Request $request){
        $add = new khachhang;
        $add->{Constant::TBL_idUser} = $request ->{Constant::TBL_idUser};
        $add->{Constant::TBL_tenKhachHang} = $request ->{Constant::TBL_tenKhachHang};
        $add->{Constant::TBL_NgaySinh} = $request ->{Constant::TBL_NgaySinh};
        $add->{Constant::TBL_DiaChi} = $request ->{Constant::TBL_DiaChi};
        $add->{Constant::TBL_SoDienThoai} = $request ->{Constant::TBL_SoDienThoai};
        $add->{Constant::TBL_Email} = $request ->{Constant::TBL_Email};
        $add->{Constant::TBL_Active} = $request ->{Constant::TBL_Active};
        $add->save();

    }

    function editKhachHang(Request $request){
        $edit = nhanhieu::find($request->{Constant::TBL_maKhachHang});
        $edit->{Constant::TBL_idUser} = $request ->{Constant::TBL_idUser};
        $edit->{Constant::TBL_tenKhachHang} = $request ->{Constant::TBL_tenKhachHang};
        $edit->{Constant::TBL_NgaySinh} = $request ->{Constant::TBL_NgaySinh};
        $edit->{Constant::TBL_DiaChi} = $request ->{Constant::TBL_DiaChi};
        $edit->{Constant::TBL_SoDienThoai} = $request ->{Constant::TBL_SoDienThoai};
        $edit->{Constant::TBL_Email} = $request ->{Constant::TBL_Email};
        $edit->{Constant::TBL_Active} = $request ->{Constant::TBL_Active};
        $edit->save();

    }

    function deleteKhachHang(Request $request){
        $id = $request->{Constant::TBL_maKhachHang};
        $delete = khachhang::where('maKhachHang', $id)->delete();
        return response()->json(['result'=>1]);
    }
}
