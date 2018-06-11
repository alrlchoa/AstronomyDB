<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stars', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('spectral_brightness_id')->unsigned()->nullable();
            $table->foreign('id')->references('id')->on('celestial_bodies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('spectral_brightness_id')->references('id')->on('spectral_brightnesses')->onDelete('set null')->onUpdate('set null');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stars');
    }
}
