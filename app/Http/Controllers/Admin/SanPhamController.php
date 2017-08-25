<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sanPham;
use App\Constant;
use App\nhanHieu;
use App\Images;
class SanPhamController extends Controller
{
    //
    function getSanPham()
    {
        try{
            $sanpham = sanPham::orderBy(Constant::CL_ID,'desc')->paginate(15);
            return view('admin.SanPham.sanpham',compact('sanpham'));
        }catch (\Exception $e){

        }

    }

    function getSanPhamById($id){
        $sanpham = sanPham::where(Constant::CL_MATHELOAI,'=',$id)->orderBy(Constant::CL_ID,'desc')->paginate(15);
        return view('admin.SanPham.sanpham',compact('sanpham'));
    }
    function addSanPham(Request $request)
    {
        try{
            $add = new SanPham;
            $add->{Constant::CL_ID} = $request->{Constant::CL_ID};
            $add->{Constant::CL_MATHELOAI} =  $request->{Constant::CL_MATHELOAI};
            $add->{Constant::CL_TENSANPHAM} =  $request->{Constant::CL_TENSANPHAM} ;
            $add->{Constant::CL_SOLUONG} =  $request->{Constant::CL_SOLUONG};
            $add->{Constant::CL_MANHANHIEU} =  $request->{Constant::CL_MANHANHIEU} ;
            $add->{Constant::CL_GIATIEN} = $request->{Constant::CL_GIATIEN} ;
            $add->{Constant::CL_ACTIVE} =  $request->{Constant::CL_ACTIVE};
            $add->save();
            $result = SanPham::with('NhanHieu')
                ->where([[Constant::CL_ID,'=',$add->{Constant::CL_ID}]])->first();
            return response()->json(['result'=>$result]);
        }catch (\Exception $e){
            return response()->json(['result'=>1]);
        }


    }

    function editSanPham(Request $request)
    {
        try{
            $edit = sanPham::find($request->{Constant::CL_ID});
            $edit->{Constant::CL_MATHELOAI} = $request->{Constant::CL_MATHELOAI} ;
            $edit->{Constant::CL_TENSANPHAM} =  $request->{Constant::CL_TENSANPHAM} ;
            $edit->{Constant::CL_SOLUONG} = $request->{Constant::CL_SOLUONG};
            $edit->{Constant::CL_MANHANHIEU} =  $request->{Constant::CL_MANHANHIEU} ;
            $edit->{Constant::CL_GIATIEN} = $request->{Constant::CL_GIATIEN} ;
            $edit->{Constant::CL_ACTIVE} =  $request->{Constant::CL_ACTIVE} ;
            $edit->save();
            $result = SanPham::with('NhanHieu')
                ->where([[Constant::CL_ID,'=',$edit->{Constant::CL_ID}]])->first();
            return response()->json(['result'=>$result]);
        }catch (\Exception $e){
            return response()->json(['result'=>1]);
        }


    }

    function deleteSanPham(Request $request)
    {
        try{
            $id = $request->{Constant::CL_ID};
            $delete = sanPham::where('id', $id)->delete();
            return response()->json(['result'=>1]);
        }catch (\Exception $e){
            return response()->json(['result'=>0]);
        }

    }

    function getImageSP(Request $request)
    {
        try{
            if($request->{Constant::CL_MASANPHAM}){
                $getImageSP = Images::where([[Constant::CL_MASANPHAM,'=',$request->{Constant::CL_MASANPHAM}]])->get();
                $masanpham = sanPham::find($request->{Constant::CL_MASANPHAM})->first();
                return view('admin.SanPham.quanlyImages',compact('getImageSP'),compact('masanpham'));
            }else{
                return view('admin.SanPham.quanlyImages');
            }

        }catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }

    function chiTietSanPham(Request $request){
        $getSanPham = sanPham::find($request->{Constant::CL_ID})->first();
        return view('admin.SanPham.detail_sp',compact('getSanPham'));
    }




}
