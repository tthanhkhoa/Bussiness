<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateTheloaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_THELOAI, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->string(Constant::CL_TENTHELOAI)->nullable();
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
        Schema::dropIfExists(Constant::TBL_THELOAI);
    }
}
