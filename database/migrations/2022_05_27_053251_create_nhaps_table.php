<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhaps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SoLuong');
            $table->date('NgayNhap');
            $table->string('GiaNhap');
            $table->string('TongTien');
            $table->string('GhiChu')->nullable();
            $table->integer('Caytrong_ID')->unsigned();
            $table->integer('Khu_ID')->unsigned();
            $table->unsignedbiginteger('User_ID');
            $table->foreign('Caytrong_ID')->references('id')->on('caytrongs');
            $table->foreign('Khu_ID')->references('id')->on('khus');
            $table->foreign('User_ID')->references('id')->on('users');
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
        Schema::dropIfExists('nhaps');
    }
}