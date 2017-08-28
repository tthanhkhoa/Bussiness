<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rememberSP extends Model
{
    //
    protected $table = Constant::TBL_REMENBERSP;
//    protected $primaryKey = Constant::TBL_idremenber;
    public $timestamps = false;

    public function KhachHang(){
        return $this->belongsTo('App\khachHang',Constant::CL_MAKHACHHANG,Constant::CL_ID);
    }
}
