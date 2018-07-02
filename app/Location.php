<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $table = Constant::TBL_LOCATION;
    public $incrementing = false;
}
