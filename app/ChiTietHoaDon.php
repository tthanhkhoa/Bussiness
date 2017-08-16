<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    //
    protected $table = Constant::TBL_CTHOADON;
//    protected $primaryKey = Constant::TBL_maChiTietHD;

    public function SanPham()
    {
        return $this->hasMany('App\sanPham', Constant::CL_MASANPHAM, Constant::CL_ID);
    }

    public function HoaDon(){
        return $this->belongsTo('App\HoaDon', Constant::CL_MAHOADON, Constant::CL_ID);
    }
}
