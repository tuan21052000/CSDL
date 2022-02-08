<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->integer('mahd');
            $table->integer('khachhangid')->unsigned();;
            $table->string('diachi');
            $table->integer('phivanchuyen');
            $table->string('tongtien');
            $table->string('ngaylap');
            $table->string('sdt');
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
        Schema::dropIfExists('hoadon');
    }
}
