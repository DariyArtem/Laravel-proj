<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

                $table->id("id");
                $table->string("title")->nullable(false);
                $table->string("img_path")->nullable(false)->default('/');
                $table->string("description")->nullable(false);
                $table->string("notification")->nullable(false);
                $table->text("content")->nullable(false);
                $table->integer("author_id")->nullable(false)->default(1);
                $table->string('video_path')->nullable(false)->default('/');
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
        Schema::dropIfExists('posts');
    }
}
