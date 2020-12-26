<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthenticateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authenticate_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('authenticate_name')->default('')->comment('認證名稱');
            $table->string('authenticate_path')->default('')->comment('連結');
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
        Schema::dropIfExists('authenticate_infos');
    }
}
