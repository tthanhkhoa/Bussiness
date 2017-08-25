<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\nhanHieu;
use App\Images;

class SanPham extends Model
{
    //
    protected $table = Constant::TBL_SANPHAM;
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = Constant::CL_ID;

    public function ChiTietHD(){
        return $this->belongsTo('App\ChiTietHoaDon', Constant::CL_MAHOADON, Constant::CL_ID);
    }

    public function TheLoai(){
        return $this->belongsTo('App\theLoai', Constant::CL_MATHELOAI, Constant::CL_ID);
    }

    public function NhanHieu(){
        return $this->belongsTo('App\NhanHieu', Constant::CL_MANHANHIEU, Constant::CL_ID);
    }

    public function Images(){
        return $this->hasMany('App\Images', Constant::CL_MASANPHAM, Constant::CL_ID);
    }

    public function chiTietSanPham(){
        return $this->belongsTo('App\chitietsanpham', Constant::CL_MANHANHIEU, Constant::CL_ID);
    }


}
