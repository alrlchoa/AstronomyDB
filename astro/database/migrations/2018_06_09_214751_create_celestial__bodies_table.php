<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelestialBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celestial__bodies', function (Blueprint $table) {
            $table->increments('id');
            $table->float('right_ascension',8,3);
            $table->float('declination',8,3);
            $table->string('name')->nullable();
            $table->boolean('verified')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celestial__bodies');
    }
}
