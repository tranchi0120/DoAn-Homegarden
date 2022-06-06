<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoLuongChetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('khus', function (Blueprint $table) {
            $table -> integer('SoLuongChet')->null();
            $table -> string('GhiChu');
            $table -> string('HinhAnh');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('khus', function (Blueprint $table) {
            // $table -> dropColumn ('SoLuongChet');
            // $table -> dropColumn ('GhiChu');
            $table -> dropColumn ('HinhAnh');
        });
    }
}