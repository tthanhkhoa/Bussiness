<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_KhachHang, function (Blueprint $table) {
            $table->increments(Constant::TBL_maKhachHang);
            $table->integer(Constant::TBL_idUser)->nullable();
            $table->string(Constant::TBL_tenKhachHang)->nullable();
            $table->string(Constant::TBL_NgaySinh)->nullable();
            $table->string(Constant::TBL_DiaChi)->nullable();
            $table->string(Constant::TBL_SoDienThoai)->nullable();
            $table->string(Constant::TBL_Email)->nullable();

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
        Schema::dropIfExists(Constant::TBL_KhachHang);
    }
}
