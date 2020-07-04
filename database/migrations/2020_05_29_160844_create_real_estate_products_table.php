<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('sub_heading')->nullable();
            $table->string('property_type')->nullable();
            $table->string('intended_use')->nullable();
            $table->string('origination_fee')->nullable();
            $table->string('interest_rate')->nullable();
            $table->string('credit_score')->nullable();
          
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('real_estate_products');
    }
}
