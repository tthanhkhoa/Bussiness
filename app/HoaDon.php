<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    //
    protected $table = Constant::TBL_HoaDon;
    protected $primaryKey = Constant::TBL_maHoaDon;

    public function KhachHang(){
        return $this->belongsTo(Constant::TBL_KhachHang, Constant::TBL_maKhachHang, Constant::TBL_maKhachHang);
    }

    public function ChiTietHD(){
        return $this->hasMany(Constant::TBL_ChiTietHoaDon);
    }
}
