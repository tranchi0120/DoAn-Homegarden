<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinhTrangKhusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinh_trang_khus', function (Blueprint $table) {
           	$table->increments('id');
            $table->string('HinhAnh');
            $table->string('GhiChu');
            $table->integer('Khu_ID')->unsigned();
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
        Schema::dropIfExists('tinh_trang_khus');
    }
}