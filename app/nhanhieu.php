<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanHieu extends Model
{
    //
    protected $table = Constant::TBL_NHANHIEU;
    public $timestamps = false;
    public $incrementing = false;

    public function SanPham(){
        return $this->hasMany('App\SanPham',Constant::CL_MASANPHAM,Constant::CL_ID);
    }
}
