<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Yeuthich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeuthich', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->integer('sanphamid')->unsigned();;
            $table->integer('dongiaid');
            $table->foreign('sanphamid')->references('id')->on('sanpham');
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
        Schema::dropIfExists('yeuthich');
    }
}
