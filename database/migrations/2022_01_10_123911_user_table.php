<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("users", function (Blueprint $table){

            $table->id("id");
            $table->string("email")->unique("email");
            $table->string("password");
            $table->string("phone")->unique("phone");
            $table->string("name");
            $table->string("surname");
            $table->string("country");
            $table->string("region");
            $table->string("city");
            $table->text("about")->nullable(true);
            $table->foreignId("role_id")->default(1)->references("id")->on("roles")->onDelete("cascade");
            $table->foreignId("status")->default(1)->references("id")->on("statuses")->onDelete("cascade");
            $table->string("picture")->default("/");
            $table->string("remember_token", 100)->nullable(true);
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
        Schema::dropIfExists('users');
    }
}
