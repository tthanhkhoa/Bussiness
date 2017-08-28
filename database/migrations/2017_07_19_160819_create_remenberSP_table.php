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
        Schema::create(Constant::TBL_REMENBERSP, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->integer(Constant::CL_MAKHACHHANG)->unsigned();
            $table->foreign(Constant::CL_MAKHACHHANG)->references(Constant::CL_ID)->on(App\Constant::TBL_KHACHHANG)->onDelete('cascade');
            $table->string(Constant::CL_MASANPHAM)->nullable();
            $table->integer(Constant::CL_SOLUONG)->nullable();
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
        Schema::dropIfExists(Constant::TBL_REMENBERSP);
    }
}
