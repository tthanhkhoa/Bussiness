<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Constant;

class thongtin extends Model
{
    //
    protected $table = Constant::TBL_THONGTIN;
    public $incrementing = false;
    public $timestamps = false;
}
