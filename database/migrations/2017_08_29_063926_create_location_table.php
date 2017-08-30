<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;
class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_LOCATION, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->string(Constant::CL_AS);
            $table->string(Constant::CL_CITY);
            $table->string(Constant::CL_COUNTRY);
            $table->string(Constant::CL_COUNTRYCODE);
            $table->string(Constant::CL_ISP);
            $table->string(Constant::CL_LAT);
            $table->string(Constant::CL_LON);
            $table->string(Constant::CL_ORG);
            $table->string(Constant::CL_QUERY);
            $table->string(Constant::CL_REGION);
            $table->string(Constant::CL_REGIONNAME);
            $table->string(Constant::CL_TIMEZONE);
            $table->string(Constant::CL_ZIP);
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
        Schema::dropIfExists(Constant::TBL_LOCATION);
    }
}
