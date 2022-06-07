<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnBaidangs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baidangs', function (Blueprint $table) {
             $table->dropForeign(['Danhmuc_ID']);
              $table->dropColumn(['Danhmuc_ID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baidangs', function (Blueprint $table) {
            //
        });
    }
}