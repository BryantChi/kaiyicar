<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendlinkInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendlink_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linkName')->default('')->comment('名稱');
            $table->text('linkUrl')->comment('網址');
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
        Schema::dropIfExists('friendlink_infos');
    }
}
