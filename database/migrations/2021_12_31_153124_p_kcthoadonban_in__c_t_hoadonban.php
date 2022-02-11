<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PKcthoadonbanInCTHoadonban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('CTHoadonban', function (Blueprint $table) {
            $table->foreign('hoadonban_id')
            ->references('id')->on('Hoadonban')
            ->onDelete('cascade'); 
            $table->foreign('sanpham_id')
          ->references('id')->on('Sanpham')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_c_t_hoadonban', function (Blueprint $table) {
            //
        });
    }
}
