<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theLoai extends Model
{
    //
    protected $table = Constant::TBL_THELOAI;
    public $incrementing = false;
    public $timestamps = false;
//    protected $primaryKey = Constant::TBL_MaTheLoai;

    public function SanPham(){
        return $this->hasMany('App\sanpham',Constant::CL_MATHELOAI,Constant::CL_ID);
    }
}
