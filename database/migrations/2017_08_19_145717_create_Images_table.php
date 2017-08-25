<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(Constant::TBL_IMAGES, function (Blueprint $table) {
            $table->increments(Constant::CL_ID);
            $table->string(Constant::CL_MASANPHAM,50);
            $table->foreign(Constant::CL_MASANPHAM)->references(Constant::CL_ID)
                ->on(App\Constant::TBL_SANPHAM)->onDelete('cascade');
            $table->string(Constant::CL_IMAGE_URL);
            $table->string(Constant::CL_THUMPNAIL_URL);
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
        Schema::dropIfExists(Constant::TBL_IMAGES);
    }
}
