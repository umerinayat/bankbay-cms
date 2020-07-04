<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilterControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filter_controls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');

            $table->unsignedBigInteger('product_filter_id')->index();
            $table->foreign('product_filter_id')->references('id')->on('product_filters')->onDelete('cascade');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filter_controls');
    }
}
