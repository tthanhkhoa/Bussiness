<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateTheloaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_TheLoai, function (Blueprint $table) {
            $table->increments(Constant::TBL_MaTheLoai);
            $table->string(Constant::TBL_tenTheLoai)->nullable();
            $table->integer(Constant::TBL_Active)->nullable();
//            $table->timestamps();
         //   $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists(Constant::TBL_TheLoai);
    }
}
