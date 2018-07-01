<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constant::TBL_SLIDER, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->string(Constant::CL_IMAGE_URL);
            $table->string(Constant::CL_GIOITHIEU);
            $table->string(Constant::CL_CONTACT);
            $table->string(Constant::CL_TIEUDE);
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
        Schema::dropIfExists(Constant::TBL_SLIDER);
    }
}
