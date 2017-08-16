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
        Schema::create(Constant::TBL_KHACHHANG, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->integer(Constant::CL_USER_ID)->unsigned();
            $table->foreign(Constant::CL_USER_ID)->references(Constant::CL_ID)->on(App\Constant::TBL_USER)->onDelete('cascade');
            $table->string(Constant::CL_TENKHACHHANG)->nullable();
            $table->string(Constant::CL_NGAYSINH)->nullable();
            $table->string(Constant::CL_DIACHI)->nullable();
            $table->string(Constant::CL_SDT)->nullable();
            $table->string(Constant::CL_EMAIL)->nullable();
            $table->integer(Constant::CL_ACTIVE)->nullable();
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
        Schema::dropIfExists(Constant::TBL_KHACHHANG);
    }
}
