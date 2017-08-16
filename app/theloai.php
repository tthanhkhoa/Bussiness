<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theLoai extends Model
{
    //
    protected $table = Constant::TBL_THELOAI;
    public $timestamps = false;
//    protected $primaryKey = Constant::TBL_MaTheLoai;

    public function SanPham(){
        return $this->hasMany('App\sanPham',Constant::CL_MASANPHAM,Constant::CL_ID);
    }
}
