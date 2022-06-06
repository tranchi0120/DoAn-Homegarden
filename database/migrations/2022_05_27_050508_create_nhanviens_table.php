<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // $table->string('GioiTinh');
            $table->integer('sdt');
            $table->string('email');
            $table->string('password');
            // $table->integer('Quyen_ID')->unsigned();
            // $table->foreign('Quyen_ID')->references('id')->on('quyens');
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
        Schema::dropIfExists('nhanviens');
    }
}