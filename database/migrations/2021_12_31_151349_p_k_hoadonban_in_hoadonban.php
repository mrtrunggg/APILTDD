<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PKHoadonbanInHoadonban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoadonban', function (Blueprint $table) {
            $table->foreign('taikhoan_id')
                  ->references('id')->on('Taikhoan')
                  ->onDelete('cascade'); 
            $table->foreign('nhanvien_id')
                ->references('id')->on('Nhanvien')
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
        Schema::table('hoadonban', function (Blueprint $table) {
            //
        });
    }
}
