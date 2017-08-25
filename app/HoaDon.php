<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    //
    protected $table = Constant::TBL_HOADON;
    public $incrementing = false;
    public function KhachHang(){
        return $this->belongsTo('App\khachHang', Constant::CL_MAKHACHHANG, Constant::CL_ID);
    }

    public function ChiTietHD(){

        return $this->hasMany('App\ChiTietHoaDon',Constant::CL_MAHOADON,Constant::CL_ID);
    }
}
