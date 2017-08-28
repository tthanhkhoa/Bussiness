<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_HOADON, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->integer(Constant::CL_MAKHACHHANG)->unsigned();
            $table->foreign(Constant::CL_MAKHACHHANG)->references(Constant::CL_ID)->on(App\Constant::TBL_KHACHHANG)->onDelete('cascade');
            $table->double(Constant::CL_TONGTIEN)->nullable();
            $table->date(Constant::CL_NGAYLAP)->nullable();
            $table->string(Constant::CL_STATUS)->nullable();
            $table->timestamps();
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
        Schema::dropIfExists(Constant::TBL_HOADON);
    }
}
