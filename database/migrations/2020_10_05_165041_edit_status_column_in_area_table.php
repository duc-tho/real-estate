<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditStatusColumnInAreaTable extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('area', function (Blueprint $table) {
               $table->integer('Status')->default('1')->nullable()->change();
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::table('area', function (Blueprint $table) {
               $table->integer('Status')->default('1')->change();
          });
     }
}