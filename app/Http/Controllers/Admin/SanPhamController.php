<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sanpham;
use App\Constant;
use App\nhanhieu;

class SanPhamController extends Controller
{
    //
    function getSanPham(){
        $sanpham = sanpham::orderBy(Constant::TBL_maSanPham,'desc')->paginate(15);
//        return $sanpham;
        return view('admin.SanPham.sanpham',compact('sanpham'));
    }

    function getSanPhamById($id){
        return $id;
        $sanpham = sanpham::orderBy(Constant::TBL_maSanPham,'desc')->paginate(15);
//        return $sanpham;
        return view('admin.SanPham.sanpham',compact('sanpham'));
    }
    function addSanPham(Request $request){
        $add = new sanpham;
        $add->{Constant::TBL_MaTheLoai} = isset($request->{Constant::TBL_MaTheLoai}) ? $request->{Constant::TBL_MaTheLoai} : '';
        $add->{Constant::TBL_tenSanPham} = isset($request->{Constant::TBL_tenSanPham}) ? $request->{Constant::TBL_tenSanPham} : '';
        $add->{Constant::TBL_soLuong} = isset($request->{Constant::TBL_soLuong}) ? $request->{Constant::TBL_soLuong} : '';
        $add->{Constant::TBL_idNhanHieu} = isset($request->{Constant::TBL_idNhanHieu}) ? $request->{Constant::TBL_idNhanHieu} : '';
        $add->{Constant::TBL_GiaTien} = isset($request->{Constant::TBL_GiaTien}) ? $request->{Constant::TBL_GiaTien} : '';
        $add->{Constant::TBL_Active} = isset($request->{Constant::TBL_Active}) ? $request->{Constant::TBL_Active} : '';
        $add->save();

    }

    function editSanPham(Request $request){
        $edit = sanpham::find($request->{Constant::TBL_maSanPham});
        $edit->{Constant::TBL_MaTheLoai} = isset($request->{Constant::TBL_MaTheLoai}) ? $request->{Constant::TBL_MaTheLoai} : '';
        $edit->{Constant::TBL_tenSanPham} = isset($request->{Constant::TBL_tenSanPham}) ? $request->{Constant::TBL_tenSanPham} : '';
        $edit->{Constant::TBL_soLuong} = isset($request->{Constant::TBL_soLuong}) ? $request->{Constant::TBL_soLuong} : '';
        $edit->{Constant::TBL_idNhanHieu} = isset($request->{Constant::TBL_idNhanHieu}) ? $request->{Constant::TBL_idNhanHieu} : '';
        $edit->{Constant::TBL_GiaTien} = isset($request->{Constant::TBL_GiaTien}) ? $request->{Constant::TBL_GiaTien} : '';
        $edit->{Constant::TBL_Active} = isset($request->{Constant::TBL_Active}) ? $request->{Constant::TBL_Active} : '';
        $edit->save();

    }

    function deleteSanPham(Request $request){
        $id = $request->{Constant::TBL_maSanPham};
        $delete = sanpham::where('maSanPham', $id)->delete();
        return response()->json(['result'=>1]);
    }
}
