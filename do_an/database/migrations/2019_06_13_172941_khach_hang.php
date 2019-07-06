<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('khach_hang', function (Blueprint $table) {
            $table->increments('ma');
            $table->string('ten_khach_hang',50);
            $table->integer('tuoi');
            $table->integer('ma_xe')->unsigned();
            $table->foreign('ma_xe')->references('ma_xe')->on('ma_xe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khach_hang');
    }
}
