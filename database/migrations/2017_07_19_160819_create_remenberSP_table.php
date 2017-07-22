<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateRemenberSPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_RemenberSP, function (Blueprint $table) {
            $table->increments(Constant::TBL_idremenber);
            $table->foreign(Constant::TBL_maKhachHang)->references(Constant::TBL_maKhachHang)->on(App\Constant::TBL_KhachHang)->onDelete('cascade');
          //  $table->integer(Constant::TBL_maKhachHang)->nullable();
            $table->string(Constant::TBL_maSanPham)->nullable();
            $table->integer(Constant::TBL_soLuong)->nullable();
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
        Schema::dropIfExists(Constant::TBL_RemenberSP);
    }
}
