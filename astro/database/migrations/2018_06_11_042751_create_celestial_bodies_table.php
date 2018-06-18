<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCelestialBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celestial_bodies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('right_ascension');
            $table->integer('declination');
            $table->string('name')->nullable();
            $table->boolean('verified')->default(false);
            // CHECK CONSTRAINTS SHOULD GO HERE (SAMPLE HERE PROVIDED). Actual Constraints are in the controller.
            // CONSTRAINT right_limit CHECK (right_ascension >= 0 AND right_ascension <=360)
            // CONSTRAINT decl_limit CHECK (declination >= 0 AND declination <=360)
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('celestial_bodies');
    }
}
