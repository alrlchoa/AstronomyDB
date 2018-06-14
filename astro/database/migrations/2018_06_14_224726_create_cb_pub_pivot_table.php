<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCBPubPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cb_pub', function (Blueprint $table) {
            $table->integer('cb_id')->unsigned()->index();
            $table->foreign('cb_id')->references('id')->on('celestial_bodies')->onDelete('cascade');
            $table->integer('pub_id')->unsigned()->index();
            $table->foreign('pub_id')->references('id')->on('publications')->onDelete('cascade');
            $table->primary(['cb_id', 'pub_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cb_pub');
    }
}
