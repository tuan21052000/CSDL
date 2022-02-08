<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chitiethoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->integer('mahdid')->unsigned();
            $table->integer('sanphamid')->unsigned();;
            $table->string('soluong');
            $table->String('dongia');
            $table->foreign('sanphamid')->references('id')->on('sanpham');
            $table->foreign('mahdid')->references('id')->on('hoadon');
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
        Schema::dropIfExists('chitiethoadon');
    }
}
