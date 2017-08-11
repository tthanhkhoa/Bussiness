<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remenberSP extends Model
{
    //
    protected $table = Constant::TBL_RemenberSP;
//    protected $primaryKey = Constant::TBL_idremenber;
    public $timestamps = false;

    public function KhachHang(){
        return $this->belongsTo('App\khachhang',Constant::CL_MAKHACHHANG,Constant::CL_ID);
    }
}
