<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpectralBrightnessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spectral_brightnesses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('spectral_type');
            $table->float('brightness');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('spectral_brightnesses');
    }
}
