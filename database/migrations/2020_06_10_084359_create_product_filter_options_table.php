<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFilterOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_filter_options', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->tinyInteger('is_product_category')->default(false);
            $table->tinyInteger('is_vendor')->default(false);

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
        Schema::dropIfExists('product_filter_options');
    }
}
