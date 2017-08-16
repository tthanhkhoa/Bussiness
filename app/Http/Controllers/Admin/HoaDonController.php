<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\HoaDon;
use app\Constant;

class HoaDonController extends Controller
{
    //
    function getHoaDon(){
        $getHoaDon = HoaDon::orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.KhachHang.khachhang',compact('getHoaDon'));
    }

    function addHoaDon(Request $request){
        $add = new HoaDon;
        $add->{Constant::CL_MAKHACHHANG} = $request ->{Constant::CL_MAKHACHHANG};
        $add->{Constant::CL_TONGTIEN} = $request ->{Constant::CL_TONGTIEN};
        $add->{Constant::CL_NGAYLAP} = $request ->{Constant::CL_NGAYLAP};
        $add->save();

    }

    function editHoaDon(Request $request){
        $edit = HoaDon::find($request->{Constant::CL_ID});
        $edit->{Constant::CL_MAKHACHHANG} = $request ->{Constant::CL_MAKHACHHANG};
        $edit->{Constant::CL_TONGTIEN} = $request ->{Constant::CL_TONGTIEN};
        $edit->{Constant::CL_NGAYLAP} = $request ->{Constant::CL_NGAYLAP};
        $edit->save();
    }

    function deleteHoaDon(Request $request){
        $id = $request->{Constant::CL_ID};
        $delete = HoaDon::where('maHoaDon', $id)->delete();
        return response()->json(['result'=>1]);
    }

}
