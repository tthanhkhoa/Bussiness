<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_SanPham, function (Blueprint $table) {
            $table->increments(Constant::TBL_maSanPham);
            $table->integer(Constant::TBL_MaTheLoai)->nullable();
            $table->string(Constant::TBL_tenSanPham)->nullable();
            $table->string(Constant::TBL_soLuong)->nullable();
            $table->string(Constant::TBL_nhaCungCap)->nullable();
            $table->string(Constant::TBL_GiaTien)->nullable();
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
        Schema::dropIfExists(Constant::TBL_SanPham);
    }
}
