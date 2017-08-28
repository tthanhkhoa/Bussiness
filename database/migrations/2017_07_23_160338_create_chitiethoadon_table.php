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
        Schema::create(Constant::TBL_CTHOADON, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->string(Constant::CL_MASANPHAM,50);
            $table->foreign(Constant::CL_MASANPHAM)->references(Constant::CL_ID)->on(App\Constant::TBL_SANPHAM)->onDelete('cascade');
            $table->integer(Constant::CL_SOLUONG)->nullable();
            $table->integer(Constant::CL_MAHOADON)->unsigned();
            $table->foreign(Constant::CL_MAHOADON)->references(Constant::CL_ID)->on(App\Constant::TBL_HOADON)->onDelete('cascade');
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
        Schema::dropIfExists(Constant::TBL_CTHOADON);
    }
}
