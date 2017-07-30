<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    //
    protected $table = Constant::TBL_TheLoai;
    public $timestamps = false;

    public function SanPham(){
        return $this->hasMany(Constant::TBL_SanPham);
    }
}
