<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Constant;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constant::TBL_User, function (Blueprint $table) {
            $table->increments(Constant::TBL_idUser);
            $table->foreign(Constant::TBL_maKhachHang)->references(Constant::TBL_maKhachHang)->on(App\Constant::TBL_KhachHang)->onDelete('cascade');
            $table->string(Constant::TBL_username)->nullable();
           // $table->string('email')->unique();
            $table->string(Constant::TBL_password)->nullable();
            //$table->rememberToken();
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
        Schema::dropIfExists(Constant::TBL_User);
    }
}
