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
            $table->Increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->biginteger('roll_number')->unique()->unsigned()->default(0)->length(11);
            $table->string('admission_number')->unique()->length(7);
            $table->biginteger('mobile_number')->length(10);
            $table->integer('year')->length(1)->default(0);
            $table->boolean('fee_status')->default(false);
            $table->boolean('is_hosteler')->default(false);
            $table->boolean('result_status')->default(false);
            $table->string('utr_number')->default(0);
            $table->boolean('fine')->default(false);
            $table->string('gender')->default('none');
            $table->integer('room_id')->default(0);
            $table->boolean('book_room')->default(false);
            $table->string('type')->default('default');


            $table->rememberToken();
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
