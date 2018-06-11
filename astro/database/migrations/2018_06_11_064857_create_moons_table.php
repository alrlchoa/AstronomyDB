<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moons', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('planet_id')->unsigned();
            $table->float('orbital_period')->nullable();
            $table->float('radius')->nullable();
            $table->foreign('id')->references('id')->on('celestial_bodies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('planet_id')->references('id')->on('planets')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('moons');
    }
}
