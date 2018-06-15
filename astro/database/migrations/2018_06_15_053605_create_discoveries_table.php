<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscoveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discoveries', function (Blueprint $table) {
            $table->integer('discoverer_id')->unsigned()->index();
            $table->foreign('discoverer_id')->references('id')->on('astronomers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cb_id')->unsigned()->index();
            $table->foreign('cb_id')->references('id')->on('celestial_bodies')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('instrument_id')->unsigned()->index();
            $table->foreign('instrument_id')->references('id')->on('instruments')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_of_discovery');
            $table->primary(['discoverer_id', 'cb_id', 'instrument_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discoveries');
    }
}
