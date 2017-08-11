<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    //
    protected $table = Constant::TBL_TheLoai;
    public $timestamps = false;
//    protected $primaryKey = Constant::TBL_MaTheLoai;

    public function SanPham(){
        return $this->hasMany('App\sanpham',Constant::CL_MASANPHAM,Constant::CL_ID);
    }
}
