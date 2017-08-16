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
        Schema::create(Constant::TBL_SANPHAM, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->integer(Constant::CL_MATHELOAI)->unsigned();
            $table->foreign(Constant::CL_MATHELOAI)->references(Constant::CL_ID)->on(App\Constant::TBL_THELOAI)->onDelete('cascade');
            $table->string(Constant::CL_TENSANPHAM)->nullable();
            $table->integer(Constant::CL_SOLUONG)->nullable();
            $table->integer(Constant::CL_MANHANHIEU)->unsigned();
            $table->foreign(Constant::CL_MANHANHIEU)->references(Constant::CL_ID)->on(App\Constant::TBL_NHANHIEU)->onDelete('cascade');
            $table->double(Constant::CL_GIATIEN)->nullable();
            $table->integer(Constant::CL_ACTIVE)->nullable();
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
        Schema::dropIfExists(Constant::TBL_SANPHAM);
    }
}
