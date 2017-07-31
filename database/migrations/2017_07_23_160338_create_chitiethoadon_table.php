<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateChitiethoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_ChiTietHoaDon, function (Blueprint $table) {
            $table->increments(Constant::TBL_maChiTietHD);
            $table->integer(Constant::TBL_maSanPham)->unsigned();
            $table->foreign(Constant::TBL_maSanPham)->references(Constant::TBL_maSanPham)->on(App\Constant::TBL_SanPham)->onDelete('cascade');
           // $table->integer(Constant::TBL_maSanPham)->nullable();
            $table->string(Constant::TBL_tenSanPham)->nullable();
            $table->integer(Constant::TBL_soLuong)->nullable();
            $table->integer(Constant::TBL_maHoaDon)->unsigned();
            $table->foreign(Constant::TBL_maHoaDon)->references(Constant::TBL_maHoaDon)->on(App\Constant::TBL_HoaDon)->onDelete('cascade');
          //  $table->timestamps();
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
        Schema::dropIfExists(Constant::TBL_HoaDon);
    }
}
