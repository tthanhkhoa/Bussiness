<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateThongtinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constant::TBL_THONGTIN, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->string(Constant::CL_TENSHOP);
            $table->string(Constant::CL_TENCHUSHOP);
            $table->string(Constant::CL_SDT);
            $table->string(Constant::CL_FACEBOOK);
            $table->string(Constant::CL_DIACHI);
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
        Schema::dropIfExists(Constant::TBL_THONGTIN);
    }
}
