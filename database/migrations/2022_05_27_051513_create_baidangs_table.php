<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TieuDe');
            $table->string('NoiDung');
            $table->string('HinhAnh');
            $table->string('NgayDang');
            $table->unsignedbiginteger('User_ID');
            // $table->integer('Danhmuc_ID')->unsigned();
            $table->foreign('User_ID')->references('id')->on('users');
            // $table->foreign('Danhmuc_ID')->references('id')->on('danhmucloaicays');
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
        Schema::dropIfExists('baidangs');
    }
}