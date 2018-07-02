<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    public function SanPham(){
        return $this->belongsTo('App\sanpham', Constant::CL_MASANPHAM, Constant::CL_ID);
    }
}
