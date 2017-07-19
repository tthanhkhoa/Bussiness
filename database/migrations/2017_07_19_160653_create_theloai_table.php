<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
        Schema::create(C::TBL_AGENT, function (Blueprint $table) {
            $table->increments(C::CL_ID);
            $table->unsignedInteger(C::CL_HOSPITAL_ID)->nullable();
            $table->foreign(C::CL_HOSPITAL_ID)->references(C::CL_ID)->on(App\C::TBL_HOSPITAL)->onDelete('cascade');
            $table->string(C::CL_NAME)->nullable();
            $table->string(C::CL_MAJOR)->nullable();
            $table->string(C::CL_POSITION)->nullable();
            $table->string(C::CL_PHONE)->nullable();
            $table->tinyInteger(C::CL_EMERGENCY_TYPE)->nullable();
            $table->integer(C::CL_ORDER)->nullable();
            $table->timestamps();
            $table->softDeletes();
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
    }
}
