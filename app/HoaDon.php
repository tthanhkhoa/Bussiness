<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    //
    protected $table = Constant::TBL_HOADON;
//    protected $primaryKey = Constant::TBL_maHoaDon;

    public function KhachHang(){
        return $this->belongsTo('App\khachHang', Constant::CL_MAKHACHHANG, Constant::CL_ID);
    }

    public function ChiTietHD(){
        return $this->belongsTo('App\ChiTietHoaDon',Constant::CL_MACHITIETHD,Constant::CL_ID);
    }
}
