<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanhieu extends Model
{
    //
    protected $table = Constant::TBL_NhanHieu;
//    protected $primaryKey = Constant::TBL_idNhanHieu;
    public $timestamps = false;

    public function SanPham(){
        return $this->hasMany('App\sanpham',Constant::CL_MASANPHAM,Constant::CL_ID);
    }
}
