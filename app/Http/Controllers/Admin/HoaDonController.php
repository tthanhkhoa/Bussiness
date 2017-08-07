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
        $getHoaDon = HoaDon::orderBy(Constant::TBL_maHoaDon,'desc')->paginate(15);
        return view('admin.KhachHang.khachhang',compact('getHoaDon'));
    }

    function addHoaDon(Request $request){
        $add = new HoaDon;
        $add->{Constant::TBL_maKhachHang} = $request ->{Constant::TBL_maKhachHang};
        $add->{Constant::TBL_tongTien} = $request ->{Constant::TBL_tongTien};
        $add->{Constant::TBL_Ngaylap} = $request ->{Constant::TBL_Ngaylap};
        $add->save();

    }

    function editHoaDon(Request $request){
        $edit = HoaDon::find($request->{Constant::TBL_maHoaDon});
        $edit->{Constant::TBL_maKhachHang} = $request ->{Constant::TBL_maKhachHang};
        $edit->{Constant::TBL_tongTien} = $request ->{Constant::TBL_tongTien};
        $edit->{Constant::TBL_Ngaylap} = $request ->{Constant::TBL_Ngaylap};
        $edit->save();
    }

    function deleteHoaDon(Request $request){
        $id = $request->{Constant::TBL_maHoaDon};
        $delete = HoaDon::where('maHoaDon', $id)->delete();
        return response()->json(['result'=>1]);
    }

}
