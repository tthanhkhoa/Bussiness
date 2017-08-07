<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    //
    protected $table = Constant::TBL_ChiTietHoaDon;
    protected $primaryKey = Constant::TBL_maChiTietHD;

    public function SanPham()
    {
        return $this->hasMany(Constant::TBL_SanPham, Constant::TBL_maSanPham, Constant::TBL_maSanPham);
    }

    public function HoaDon(){
        return $this->belongsTo(Constant::TBL_HoaDon, Constant::TBL_maHoaDon, Constant::TBL_maHoaDon);
    }
}
