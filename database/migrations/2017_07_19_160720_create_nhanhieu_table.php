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
        Schema::create(Constant::TBL_NhanHieu, function (Blueprint $table) {
            $table->increments(Constant::TBL_idNhanHieu);
            $table->string(Constant::TBL_tenNhanHieu)->nullable();
            $table->string(Constant::TBL_DiaChi)->nullable();
            $table->string(Constant::TBL_SoDienThoai)->nullable();
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
        Schema::dropIfExists(Constant::TBL_NhanHieu);
    }
}
