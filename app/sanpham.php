<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\nhanHieu;

class SanPham extends Model
{
    //
    protected $table = Constant::TBL_SANPHAM;
    public $timestamps = false;

    public function ChiTietHD(){
        return $this->belongsTo('App\ChiTietHoaDon', Constant::CL_MAHOADON, Constant::CL_ID);
    }

    public function TheLoai(){
        return $this->belongsTo('App\theLoai', Constant::CL_MATHELOAI, Constant::CL_ID);
    }

    public function NhanHieu(){
        return $this->belongsTo('App\NhanHieu', Constant::CL_MANHANHIEU, Constant::CL_ID);
    }


}
