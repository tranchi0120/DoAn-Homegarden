<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeGhichuBaidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baidangs', function (Blueprint $table) {
             $table->text('NoiDung')->change();
             $table->date('NgayDang')->format('d/m/Y')->change();
            
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
            //  $table->string('NoiDung',65536)->change();
             
        });
    }
}