<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietsanpham extends Model
{
    //
    protected $table = Constant::TBL_CHITIETSANPHAM;
    public $incrementing = false;
    public $timestamps = false;

    public function sanPham(){
        return $this->belongsTo('App\sanpham', Constant::CL_MANHANHIEU, Constant::CL_ID);
    }

}
