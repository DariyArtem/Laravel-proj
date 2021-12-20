<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_category', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("category_id")->nullable(false)->default(1);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete("cascade");
            $table->integer("post_id")->nullable(false);
            $table->foreign('post_id')->references('id')->on('posts')->onDelete("cascade");
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
        Schema::dropIfExists('post_category');
    }
}
