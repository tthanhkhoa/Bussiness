<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    //
    protected $table = Constant::TBL_CTHOADON;
    public $incrementing = false;
    public function SanPham()
    {
//        return $this->hasMany('App\sanpham', Constant::CL_ID, Constant::CL_MASANPHAM);
        return $this->belongsTo('App\sanpham', Constant::CL_MASANPHAM, Constant::CL_ID);

    }

    public function HoaDon(){
        return $this->belongsTo('App\HoaDon', Constant::CL_MAHOADON, Constant::CL_ID);
    }
}
