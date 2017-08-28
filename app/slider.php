<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    //
    protected $table = Constant::TBL_SLIDER;
    public $incrementing = false;
    public $timestamps = false;
}
