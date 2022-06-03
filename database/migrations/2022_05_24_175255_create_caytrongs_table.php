<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaytrongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caytrongs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenCay');
            $table->string('HinhAnh');
            $table->decimal('GianTien');
            $table->string('GiaiDoanPhunThuoc');
            $table->string('GhiChu');
            $table->integer('Loaicay_ID')->unsigned();
            $table->foreign('Loaicay_ID')->references('id')->on('danhmucloaicays');
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
        Schema::dropIfExists('caytrongs');
    }
}