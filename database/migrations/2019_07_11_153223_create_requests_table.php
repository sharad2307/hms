<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->Increments('id');
           
            $table->integer('user_1_id')->unsigned();//User which requested the room.
            $table->integer('user_2_id')->unsigned();
            $table->integer('user_3_id')->unsigned();
            $table->boolean('status_2')->default(false);
            $table->boolean('status_3')->default(false);
            $table->timestamps();
        });
        Schema::table('requests', function (Blueprint $table) {
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
        Schema::dropIfExists('requests');

        Schema::table('requests', function (Blueprint $table) {

            $table->dropForeign('requests_user_1_id_foreign');
            $table->dropColumn('user_1_id');
            $table->dropForeign('requests_user_2_id_foreign');
            $table->dropColumn('user_2_id');
            $table->dropForeign('requests_user_3_id_foreign');
            $table->dropColumn('user_3_id');

        });
    }
}
