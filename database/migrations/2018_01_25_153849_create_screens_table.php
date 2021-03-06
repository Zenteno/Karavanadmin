<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cl_id')->unsigned();
            $table->integer('cn_id')->unsigned()->nullable();
            $table->string('sn_mac');
            $table->enum('sn_estado_de_activacion', [0, 1])->default(0);
            $table->timestamps();
            // FOREIGN KEY
            $table->foreign('cl_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('cn_id')->references('id')->on('channels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screens');
    }
}
