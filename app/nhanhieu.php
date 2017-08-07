<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanhieu extends Model
{
    //
    protected $table = Constant::TBL_NhanHieu;
    protected $primaryKey = Constant::TBL_idNhanHieu;

    public function SanPham(){
        return $this->hasMany(Constant::TBL_SanPham);
    }
}
