<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGalaxiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galaxies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('brightness')->nullable();
            $table->float('redshift')->nullable();
            $table->string('type');
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
        Schema::drop('galaxies');
    }
}
