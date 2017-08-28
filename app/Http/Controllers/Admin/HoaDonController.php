<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HoaDon;
use App\Constant;
use App\khachHang;

class HoaDonController extends Controller
{
    //
    function getHoaDon(){
        $dsHoaDon = HoaDon::with("KhachHang")
        ->orderBy(Constant::CL_ID,'desc')->paginate(15);
        $dsKhachHang = khachHang::all();
        return view('admin.KhachHang.hoadon',compact('dsHoaDon'),compact('dsKhachHang'));
    }

    function getHoaDonChuaDuyet(){
        $dsHoaDon = HoaDon::with("KhachHang")
            ->Where([[Constant::CL_STATUS,'=',Constant::N_CHUADUYET]])
            ->orderBy(Constant::CL_ID,'desc')->paginate(15);
        $dsKhachHang = khachHang::all();
        return view('admin.KhachHang.hoadon',compact('dsHoaDon'),compact('dsKhachHang'));
    }

    function getHoaDonDaDuyet(){
        $dsHoaDon = HoaDon::with("KhachHang")
            ->Where([[Constant::CL_STATUS,'=',Constant::N_DADUYET]])
            ->orderBy(Constant::CL_ID,'desc')->paginate(15);
        $dsKhachHang = khachHang::all();
        return view('admin.KhachHang.hoadon',compact('dsHoaDon'),compact('dsKhachHang'));
    }

    function addHoaDon(Request $request){
        try{
            $add = new HoaDon;
            $add->{Constant::CL_ID} = $request->{Constant::CL_ID};
            $add->{Constant::CL_MAKHACHHANG} = $request ->{Constant::CL_MAKHACHHANG};
            $add->{Constant::CL_TONGTIEN} = $request ->{Constant::CL_TONGTIEN};
            $add->{Constant::CL_NGAYLAP} = $request ->{Constant::CL_NGAYLAP};
            $add->{Constant::CL_STATUS} = $request ->{Constant::CL_STATUS};
            $add->save();
            return response()->json(['result'=>$add]);
        }catch (\Exception $e){
            return response()->json(['result'=>$e]);
            return response()->json(['result'=>0]);
        }


    }

    function editHoaDon(Request $request){
        try{
            $edit = HoaDon::find($request->{Constant::CL_ID});
            $edit->{Constant::CL_MAKHACHHANG} = $request ->{Constant::CL_MAKHACHHANG};
            $edit->{Constant::CL_TONGTIEN} = $request ->{Constant::CL_TONGTIEN};
            $edit->{Constant::CL_NGAYLAP} = $request ->{Constant::CL_NGAYLAP};
            $edit->{Constant::CL_STATUS} = $request ->{Constant::CL_STATUS};
            $edit->save();
            return response()->json(['result'=>$edit]);
        }catch (\Exception $e){
            return response()->json(['result'=>$e]);
            return response()->json(['result'=>0]);
        }

    }

    function deleteHoaDon(Request $request){
        try{
            $id = $request->{Constant::CL_ID};
            $delete = HoaDon::where([[Constant::CL_ID,'=', $id]])->delete();
            return redirect()->route('danhsachhoadon');
        }catch (\Exception $e){
            return response()->json(['result'=>0]);
        }

    }
    function getChiTietHoaDon(Request $request){

        $dsHoaDon = HoaDon::Where([[Constant::CL_ID,'=',$request->{Constant::CL_ID}]])->first();
        $idKhachHang = HoaDon::Where([[Constant::CL_ID,'=',$request->{Constant::CL_ID}]])->first()->{Constant::CL_MAKHACHHANG};
        $dsKhachHang = khachHang::Where([[Constant::CL_ID,'=',$idKhachHang]])->first();
//        return $dsHoaDon;
        return view('admin.KhachHang.chitiethoadon',compact('dsHoaDon'),compact('dsKhachHang'));
    }

}
