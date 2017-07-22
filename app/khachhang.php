<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    //
    protected $table = Constant::TBL_KhachHang;

    public function User(){
        return $this->belongsTo(Constant::TBL_User, Constant::TBL_idUser, Constant::TBL_idUser);
    }

    public function HoaDon(){
        return $this->hasMany(Constant::TBL_HoaDon);
    }

    public function remenberSP(){
        return $this->hasMany(Constant::TBL_RemenberSP);
    }
}
