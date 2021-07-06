<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarWitnessInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_witness_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('標題');
            $table->string('witnessFrontCover')->nullable()->comment('封面');
            $table->longText('content')->comment('內容');
            $table->string('path')->nullable()->comment('附件連結');
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
        Schema::dropIfExists('car_witness_infos');
    }
}
