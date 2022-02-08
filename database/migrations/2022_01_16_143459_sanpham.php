<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('masp');
            $table->string('tensp');
            $table->string('hinhanh');
            $table->integer('soluong');
            $table->boolean('tinhtrang');
            $table->integer('dongia');
            $table->integer('loaispid')->unsigned();
            $table->foreign('loaispid')->references('id')->on('loaisanpham');
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
        Schema::dropIfExists('sanpham');
    }
}
