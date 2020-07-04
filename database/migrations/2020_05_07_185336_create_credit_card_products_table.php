<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('sub_heading')->nullable();
            $table->string('card_type')->nullable();
            $table->string('network')->nullable();
            $table->string('collateral')->nullable();
            $table->string('interest_rate')->nullable();
            $table->string('annual_fee')->nullable();
            $table->string('reward')->nullable();
            $table->string('credit_score')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
        
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
        Schema::dropIfExists('credit_card_products');
    }
}
