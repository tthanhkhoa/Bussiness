<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\nhanHieu;
use app\Constant;

class NhaCungCapController extends Controller
{
    //
    function getNhaCungCap(){
        $ncc = nhanHieu::orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.SanPham.nhacungcap',compact('ncc'));
    }

    function addNhaCungCap(Request $request){
        $add = new nhanHieu;
        $add ->{Constant::CL_TENNHANHIEU} = $request->{Constant::CL_TENNHANHIEU};
        $add ->{Constant::CL_DIACHI} = $request->{Constant::CL_DIACHI};
        $add ->{Constant::CL_SDT} = $request->{Constant::CL_SDT};
        $add ->{Constant::CL_ACTIVE} = $request->{Constant::CL_ACTIVE};
        $add->save();
    }

    function editNhaCungCap(Request $request){
        $edit = nhanHieu::find($request->{Constant::CL_ID});
        $edit ->{Constant::CL_TENNHANHIEU} = $request->{Constant::CL_TENNHANHIEU};
        $edit ->{Constant::CL_DIACHI} = $request->{Constant::CL_DIACHI};
        $edit ->{Constant::CL_SDT} = $request->{Constant::CL_SDT};
        $edit ->{Constant::CL_ACTIVE} = $request->{Constant::CL_ACTIVE};
        $edit->save();

    }

    function deleteNhaCungCap(Request $request){
        $id = $request->{Constant::CL_ID};
        $delete = sanpham::where('idNhanHieu', $id)->delete();
        return response()->json(['result'=>1]);
    }
}
