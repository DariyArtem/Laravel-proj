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
        Schema::create('users', function (Blueprint $table){

            $table->id("id");
            $table->string("email")->nullable(false)->unique('email');
            $table->string("password")->nullable(false);
            $table->string("phone")->nullable(false)->unique('phone');
            $table->string("name")->nullable(false);
            $table->string("surname")->nullable(false);
            $table->string("country")->nullable(false);
            $table->string("region")->nullable(false);
            $table->string("city")->nullable(false);
            $table->foreignId('role_id')->default(1)->references('id')->on('roles')->onDelete("cascade");
            $table->foreignId('status_id')->default(1)->references('id')->on('statuses')->onDelete("cascade");
            $table->string("picture")->nullable(true);
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
        //
    }
}