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
            $table->integer(Constant::TBL_MaTheLoai)->unsigned();
            $table->foreign(Constant::TBL_MaTheLoai)->references(Constant::TBL_MaTheLoai)->on(App\Constant::TBL_TheLoai)->onDelete('cascade');
            $table->string(Constant::TBL_tenSanPham)->nullable();
            $table->integer(Constant::TBL_soLuong)->nullable();
            $table->integer(Constant::TBL_idNhanHieu)->unsigned();
            $table->foreign(Constant::TBL_idNhanHieu)->references(Constant::TBL_idNhanHieu)->on(App\Constant::TBL_NhanHieu)->onDelete('cascade');
            $table->double(Constant::TBL_GiaTien)->nullable();
            $table->integer(Constant::TBL_Active)->nullable();
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
