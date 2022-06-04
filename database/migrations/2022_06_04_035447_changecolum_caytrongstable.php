<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangecolumCaytrongstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caytrongs', function (Blueprint $table) {
             $table->text('GiaiDoanPhunThuoc')->change(); 
             $table->text('GhiChu')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caytrongs', function (Blueprint $table) {
            //
        });
    }
}