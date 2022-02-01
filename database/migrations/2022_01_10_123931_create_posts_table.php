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
                $table->string("title");
                $table->string("img_path")->default('/');
                $table->string("description");
                $table->string("notification");
                $table->text("content");
                $table->integer("author_id")->default(1);
                $table->integer("views")->default(0);
                $table->string('video_path')->default('/');
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
