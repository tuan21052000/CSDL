<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Giohang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giohang', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->integer('khachhangid')->unsigned();
            $table->string('sanphamid');
            $table->integer('soluong');
            $table->string('hinhanh');
            $table->string('dongia');
            $table->foreign('khachhangid')->references('id')->on('khachhang');
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
        Schema::dropIfExists('giohang');
    }
}
