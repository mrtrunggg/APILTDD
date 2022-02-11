<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sanpham_name');
            $table->integer('loaisanpham_id')->unsigned();      
            $table->string('thuonghieu');
            $table->integer('dongia');
            $table->integer('soluong');
            $table->string('mota');
            $table->string('kichthuoc');
            $table->string('hinhanh');         
            $table->integer('trangthai')->nullable()->default(1);     
            $table->timestamps();
            $table->softDeletes();

        });

        // Schema::table('Nhacungcap', function($table) {
        //     $table->foreign('nhacungcap_id')->references('id')->on('Nhacungcap');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sanpham');
    }
}
