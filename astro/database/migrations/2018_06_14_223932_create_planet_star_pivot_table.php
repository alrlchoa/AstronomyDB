<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanetStarPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planet_star', function (Blueprint $table) {
            $table->integer('planet_id')->unsigned()->index();
            $table->foreign('planet_id')->references('id')->on('planets')->onDelete('cascade');
            $table->integer('star_id')->unsigned()->index();
            $table->foreign('star_id')->references('id')->on('stars')->onDelete('cascade');
            $table->primary(['planet_id', 'star_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('planet_star');
    }
}
