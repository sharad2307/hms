<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
           
            $table->engine = 'InnoDB'; 
            $table->integer('id');
            $table->integer('user_1_id')->unsigned();//User which requested the room.
            $table->integer('user_2_id')->unsigned();
            $table->integer('user_3_id')->unsigned();
            $table->boolean('room_locked_flag')->default(false);
            $table->char('gender', 1);
            

            $table->timestamps();
        });
        Schema::table('rooms', function (Blueprint $table) {

            $table->foreign('user_1_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_2_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_3_id')->references('id')->on('users')->onDelete('cascade');


        });
           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');

        Schema::table('rooms', function (Blueprint $table) {

            $table->dropForeign('rooms_user_1_id_foreign');
            $table->dropColumn('user_1_id');
            $table->dropForeign('rooms_user_2_id_foreign');
            $table->dropColumn('user_2_id');
            $table->dropForeign('rooms_user_3_id_foreign');
            $table->dropColumn('user_3_id');

        });
    }
}
