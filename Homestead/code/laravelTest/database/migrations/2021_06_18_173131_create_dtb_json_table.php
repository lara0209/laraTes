<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtbJsonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtb_json', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('service_id');
            $table->integer('api_id');
            $table->string('endpoint');
            $table->text('api_json');
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('dtb_service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtb_json');
    }
}
