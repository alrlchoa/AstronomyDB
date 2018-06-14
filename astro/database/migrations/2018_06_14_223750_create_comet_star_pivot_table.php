<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCometStarPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comet_star', function (Blueprint $table) {
            $table->integer('comet_id')->unsigned()->index();
            $table->foreign('comet_id')->references('id')->on('comets')->onDelete('cascade');
            $table->integer('star_id')->unsigned()->index();
            $table->foreign('star_id')->references('id')->on('stars')->onDelete('cascade');
            $table->primary(['comet_id', 'star_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comet_star');
    }
}
