<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remenberSP extends Model
{
    //
    protected $table = Constant::TBL_RemenberSP;

    public function KhachHang(){
        return $this->belongsTo(Constant::TBL_KhachHang,Constant::TBL_maKhachHang,Constant::TBL_maKhachHang);
    }
}
