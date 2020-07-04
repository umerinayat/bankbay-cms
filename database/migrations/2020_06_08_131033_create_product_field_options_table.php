<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFieldOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_field_options', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->tinyInteger('is_listing')->default(false);
            $table->tinyInteger('is_filter')->default(false);

            $table->unsignedBigInteger('product_field_id')->index();
            $table->foreign('product_field_id')->references('id')->on('product_fields')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_field_options');
    }
}
