<?php
/**
 * Created by PhpStorm.
 * User: khoa.tt
 * Date: 02/07/2018
 * Time: 15:24
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = Constant::TBL_GIOHANG;
    public $incrementing = false;

    public function SanPham()
    {
        return $this->belongsTo('App\sanpham', Constant::CL_MASANPHAM, Constant::CL_ID);

    }

}