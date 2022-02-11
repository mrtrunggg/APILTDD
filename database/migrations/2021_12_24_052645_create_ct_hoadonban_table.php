<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtHoadonbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CTHoadonban', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hoadonban_id')->unsigned();
            $table->integer('sanpham_id')->unsigned();
            $table->integer('soluomg');
            $table->integer('thanhtien');
            $table->integer('trangthai')->nullable()->default(1);     
            $table->timestamps();
            $table->softDeletes();
            
        });

        

        // Schema::table('Hoadonban', function($table) {
        //     $table->foreign('hoadonban_id')->references('id')->on('Hoadonban');
        // });

        // Schema::table('Sanpham', function($table) {
        //     $table->foreign('sanpham_id')->references('id')->on('Sanpham');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CTHoadonban');
    }
}
