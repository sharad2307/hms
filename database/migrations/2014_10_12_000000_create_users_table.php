<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Roll Number');
            $table->string('Username');
            $table->integer('year');
            $table->boolean('fee status')->default(false);
            $table->boolean('result status')->default(false);
            $table->integer('UTR number');
            $table->boolean('fine')->default(false);
            $table->char('gender', 1);
            $table->integer('Room id')->length(3);
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
