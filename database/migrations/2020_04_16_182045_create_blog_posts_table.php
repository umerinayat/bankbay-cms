<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->default('blog')->nullable();
            
            $table->string('title');
            $table->mediumText('short_description');
            $table->longText('post_content');
            $table->string('status', 100);
            $table->string('featured_image')->nullable();

            // SEO
            $table->string('slug')->unique()->index();
            $table->string('meta_title');
            $table->string('meta_description');

            $table->unsignedInteger('post_category_id')->index();
            $table->foreign('post_category_id')->references('id')->on('blog_posts_categories')->onDelete('cascade');

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
        Schema::dropIfExists('blog_posts');
    }
}
