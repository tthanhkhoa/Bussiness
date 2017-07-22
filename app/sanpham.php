<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    //
    protected $table = Constant::TBL_SanPham;

    public function ChiTietHD(){
        return $this->belongsTo(Constant::TBL_ChiTietHoaDon, Constant::TBL_maSanPham, Constant::TBL_maSanPham);
    }

    public function TheLoai(){
        return $this->belongsTo(Constant::TBL_TheLoai, Constant::TBL_MaTheLoai, Constant::TBL_MaTheLoai);
    }

    public function NhanHieu(){
        return $this->belongsTo(Constant::TBL_NhanHieu, Constant::TBL_idNhanHieu, Constant::TBL_idNhanHieu);
    }
}
