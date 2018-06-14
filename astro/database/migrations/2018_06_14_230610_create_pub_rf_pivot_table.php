<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePubRFPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pub_rf', function (Blueprint $table) {
            $table->integer('pub_id')->unsigned()->index();
            $table->foreign('pub_id')->references('id')->on('publications')->onDelete('cascade');
            $table->integer('rf_id')->unsigned()->index();
            $table->foreign('rf_id')->references('id')->on('researcher_fellowships')->onDelete('cascade');
            $table->primary(['pub_id', 'rf_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pub_rf');
    }
}
