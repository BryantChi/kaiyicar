<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogCarInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_car_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carName')->default('')->comment('名稱');
            $table->text('carFrontCover')->nullable()->comment('封面');
            $table->string('carType')->default('')->comment('廠牌');
            $table->string('carModel')->default('')->comment('型號');
            $table->text('carOptionals')->nullable()->comment('配備');
            $table->string('carManufactureYear')->default('')->comment('年份');
            $table->integer('price')->default('0')->comment('價格');
            $table->boolean('priceShow')->default('1')->comment('價格顯示');
            $table->integer('milage')->default('0')->comment('里程數');
            $table->string('milageUnit')->default('miles')->comment('里程數單位');
            $table->text('carImageUrl')->nullable()->comment('圖片');
            $table->text('carFileUrl')->nullable()->comment('認證書');
            $table->text('carDiscription')->nullable()->comment('車款簡介');
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
        Schema::dropIfExists('catalog_car_infos');
    }
}
