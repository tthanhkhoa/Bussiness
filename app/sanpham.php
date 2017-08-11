<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\nhanhieu;

class sanpham extends Model
{
    //
    protected $table = Constant::TBL_SanPham;
//    protected $primaryKey = Constant::TBL_maSanPham;
    public $timestamps = false;


//    public function getNameNhanHieuAttribute(){
//        return $this->NhanHieu->tenNhanHieu;
//    }
//    public function getIDNhanHieuAttribute(){
//        return $this->NhanHieu->idNhanHieu;
//    }
    public function ChiTietHD(){
        return $this->belongsTo('App\ChiTietHoaDon', Constant::CL_MAHOADON, Constant::CL_ID);
    }

    public function TheLoai(){
        return $this->belongsTo('App\theloai', Constant::CL_MATHELOAI, Constant::CL_ID);
    }

    public function NhanHieu(){
        return $this->belongsTo('App\nhanhieu', Constant::CL_MANHANHIEU, Constant::CL_ID);
    }


}
