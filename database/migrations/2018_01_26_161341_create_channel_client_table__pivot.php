<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelClientTablePivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_client', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cn_id')->unsigned();
            $table->integer('cl_id')->unsigned();
            $table->timestamps();
            // FOREIGN KEY
            $table->foreign('cn_id')->references('id')->on('channels')->onDelete('cascade');
            $table->foreign('cl_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channel_client');
    }
}
