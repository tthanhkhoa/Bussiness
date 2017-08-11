<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\nhanhieu;
use app\Constant;

class NhaCungCapController extends Controller
{
    //
    function getNhaCungCap(){
        $ncc = nhanhieu::orderBy(Constant::TBL_idNhanHieu,'desc')->paginate(15);
        return view('admin.SanPham.nhacungcap',compact('ncc'));
    }

    function addNhaCungCap(Request $request){
        $add = new nhanhieu;
        $add ->{Constant::TBL_tenNhanHieu} = $request->{Constant::TBL_tenNhanHieu};
        $add ->{Constant::TBL_DiaChi} = $request->{Constant::TBL_DiaChi};
        $add ->{Constant::TBL_SoDienThoai} = $request->{Constant::TBL_SoDienThoai};
        $add ->{Constant::TBL_Active} = $request->{Constant::TBL_Active};
        $add->save();
    }

    function editNhaCungCap(Request $request){
        $edit = nhanhieu::find($request->{Constant::TBL_idNhanHieu});
        $edit ->{Constant::TBL_tenNhanHieu} = $request->{Constant::TBL_tenNhanHieu};
        $edit ->{Constant::TBL_DiaChi} = $request->{Constant::TBL_DiaChi};
        $edit ->{Constant::TBL_SoDienThoai} = $request->{Constant::TBL_SoDienThoai};
        $edit ->{Constant::TBL_Active} = $request->{Constant::TBL_Active};
        $edit->save();

    }

    function deleteNhaCungCap(Request $request){
        $id = $request->{Constant::TBL_idNhanHieu};
        $delete = sanpham::where('idNhanHieu', $id)->delete();
        return response()->json(['result'=>1]);
    }
}
