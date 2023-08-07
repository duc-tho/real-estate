<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditStatusColumnInWardTable extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('ward', function (Blueprint $table) {
               $table->integer('status')->default(1)->nullable()->change();
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::table('ward', function (Blueprint $table) {
               $table->integer('status')->default(1)->change();
          });
     }
}