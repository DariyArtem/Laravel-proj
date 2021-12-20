<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_images', function (Blueprint $table){

            $table->id("id");
            $table->integer('post_id')->nullable(false);
            $table->foreign('post_id')->references('id')->on('posts')->onDelete("cascade");
            $table->string('img_path')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
