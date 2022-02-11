<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nhanvien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tentaikhoan');
            $table->integer('matkhau');
            $table->string('loaitk');
            $table->string('nhanvien_name');
            $table->string('cmnd');
            $table->string('email');
            $table->string('sdt');
            $table->string('sotaikhoan');
            $table->string('diachi');
            $table->string('hinhdaidien');
            $table->integer('trangthai')->nullable()->default(1);     
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Nhanvien');
    }
}
