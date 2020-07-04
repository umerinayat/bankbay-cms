<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique()->index()->nullable();
            $table->string('price');
            $table->string('old_price');
            $table->string('currency');
            $table->text('product_url');
            $table->text('description')->nullable();
            $table->string('featured_image')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_publish')->default(false);

            $table->unsignedBigInteger('product_categories_id')->index();
            $table->foreign('product_categories_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->unsignedBigInteger('vendor_id')->index();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
            
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
        Schema::dropIfExists('products');
    }
}
