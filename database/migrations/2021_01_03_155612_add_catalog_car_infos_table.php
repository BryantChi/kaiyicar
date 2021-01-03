<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCatalogCarInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catalog_car_infos', function (Blueprint $table) {

            $table->string('optionalType')->after('carModel')->nullable()->comment('配備廠商');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catalog_car_infos', function (Blueprint $table) {
            //
        });
    }
}
