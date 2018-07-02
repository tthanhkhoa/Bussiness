<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachHang extends Model
{
    protected $table = Constant::TBL_KHACHHANG;
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', Constant::CL_USER_ID, Constant::CL_ID);
    }

    public function HoaDon(){
        return $this->hasMany('App\HoaDon',Constant::CL_MAHOADON,Constant::CL_ID);
    }

    public function remenberSP(){
        return $this->hasMany('App\rememberSP',Constant::CL_REMENBER_ID,Constant::CL_ID);
    }
}
