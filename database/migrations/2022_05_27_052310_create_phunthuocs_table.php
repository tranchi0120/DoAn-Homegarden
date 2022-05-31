<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhunthuocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phunthuocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NgayPhunThuoc');
            $table->string('TenThuoc');
            $table->string('LieuLuong');
            $table->string('GhiChu');
            $table->integer('Nhanvien_ID')->unsigned();
            $table->integer('Khu_ID')->unsigned();
            $table->foreign('Nhanvien_ID')->references('id')->on('nhanviens');
            $table->foreign('Khu_ID')->references('id')->on('khus');
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
        Schema::dropIfExists('phunthuocs');
    }
}