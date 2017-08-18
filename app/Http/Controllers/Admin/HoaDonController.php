<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HoaDon;
use App\Constant;

class HoaDonController extends Controller
{
    //
    function getHoaDon(){
        $dsHoaDon = HoaDon::with("KhachHang")
        ->orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.KhachHang.hoadon',compact('dsHoaDon'));
    }

    function getHoaDonChuaDuyet(){
        $dsHoaDon = HoaDon::with("KhachHang")
            ->Where([[Constant::CL_STATUS,'=',Constant::N_CHUADUYET]])
            ->orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.KhachHang.hoadon',compact('dsHoaDon'));
    }

    function getHoaDonDaDuyet(){
        $dsHoaDon = HoaDon::with("KhachHang")
            ->Where([[Constant::CL_STATUS,'=',Constant::N_DADUYET]])
            ->orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.KhachHang.hoadon',compact('dsHoaDon'));
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
            return response()->json(['result'=>0]);
        }

    }

    function deleteHoaDon(Request $request){
        try{
            $id = $request->{Constant::CL_ID};
            $delete = HoaDon::where('maHoaDon', $id)->delete();
            return response()->json(['result'=>1]);
        }catch (\Exception $e){
            return response()->json(['result'=>0]);
        }

    }

}
