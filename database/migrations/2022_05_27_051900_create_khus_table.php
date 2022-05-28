<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenKhu');
            $table->string('TrangThai');
            $table->string('SoLuong');
            $table->string('NgayTrongCay');
            $table->string('NgayThuHoach');
            $table->string('GhiChu');
            $table->integer('Nhanvien_ID')->unsigned();
            $table->integer('Caytrong_ID')->unsigned();
            $table->foreign('Nhanvien_ID')->references('id')->on('nhanviens');
            $table->foreign('Caytrong_ID')->references('id')->on('caytrongs');
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
        Schema::dropIfExists('khus');
    }
}