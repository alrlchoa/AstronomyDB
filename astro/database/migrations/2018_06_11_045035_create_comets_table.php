<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCometsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('speed')->nullable();
            $table->foreign('id')->references('id')->on('celestial_bodies')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comets');
    }
}
