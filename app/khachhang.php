<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    //
    protected $table = Constant::TBL_KhachHang;
//    protected $primaryKey = Constant::TBL_maKhachHang;
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', Constant::CL_USER_ID, Constant::CL_ID);
    }

    public function HoaDon(){
        return $this->hasMany('App\HoaDon',Constant::CL_MAHOADON,Constant::CL_ID);
    }

    public function remenberSP(){
        return $this->hasMany('App\remenberSP',Constant::CL_REMENBER_ID,Constant::CL_ID);
    }
}
