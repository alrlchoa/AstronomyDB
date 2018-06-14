<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationReferencesPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_references', function (Blueprint $table) {
            $table->integer('referrer_id')->unsigned()->index();
            $table->foreign('referrer_id')->references('id')->on('publications')->onDelete('cascade');
            $table->integer('reference_id')->unsigned()->index();
            $table->foreign('reference_id')->references('id')->on('publications')->onDelete('cascade');
            $table->primary(['referrer_id', 'reference_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('publication_references');
    }
}
