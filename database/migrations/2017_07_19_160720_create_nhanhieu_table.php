<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateNhanhieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_NHANHIEU, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->string(Constant::CL_TENNHANHIEU)->nullable();
            $table->string(Constant::CL_DIACHI)->nullable();
            $table->string(Constant::CL_SDT)->nullable();
            $table->integer(Constant::CL_ACTIVE)->nullable();
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
        Schema::dropIfExists(Constant::TBL_NHANHIEU);
    }
}
