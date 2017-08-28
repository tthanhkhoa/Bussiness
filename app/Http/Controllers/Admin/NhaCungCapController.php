<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\nhanhieu;
use App\Constant;

class NhaCungCapController extends Controller
{
    //
    function getNhaCungCap(){
        $ncc = nhanhieu::orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.SanPham.nhacungcap',compact('ncc'));
    }

    function addNhaCungCap(Request $request){
        try{
            $add = new nhanhieu;
            $add->{Constant::CL_ID} = $request->{Constant::CL_ID};
            $add ->{Constant::CL_TENNHANHIEU} = $request->{Constant::CL_TENNHANHIEU};
            $add ->{Constant::CL_DIACHI} = $request->{Constant::CL_DIACHI};
            $add ->{Constant::CL_SDT} = $request->{Constant::CL_SDT};
            $add ->{Constant::CL_ACTIVE} = $request->{Constant::CL_ACTIVE};
            $add->save();
            return response()->json(['result'=>$add]);
        }
        catch (\Exception $e){
            return response()->json(['result'=>1]);
        }

    }

    function editNhaCungCap(Request $request){
        try{
            $edit = nhanhieu::find($request->{Constant::CL_ID});
            $edit ->{Constant::CL_TENNHANHIEU} = $request->{Constant::CL_TENNHANHIEU};
            $edit ->{Constant::CL_DIACHI} = $request->{Constant::CL_DIACHI};
            $edit ->{Constant::CL_SDT} = $request->{Constant::CL_SDT};
            $edit ->{Constant::CL_ACTIVE} = $request->{Constant::CL_ACTIVE};
            $edit->save();
            return response()->json(['result'=>$edit]);
        }
        catch (\Exception $e){
            return response()->json(['result'=>1]);
        }


    }

    function deleteNhaCungCap(Request $request){
        try{
            $id = $request->{Constant::CL_ID};
            $delete = nhanhieu::where('id', $id)->delete();
            return response()->json(['result'=>1]);
        }
        catch (\Exception $e){
            return response()->json(['result'=>0]);
        }

    }
}
