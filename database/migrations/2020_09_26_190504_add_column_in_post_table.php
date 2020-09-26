<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnInPostTable extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('post', function (Blueprint $table) {
               $table->unsignedInteger('ViewCount')->nullable()->default(0);
               $table->unsignedInteger('Paper')->nullable()->default(null);
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::table('post', function (Blueprint $table) {
               $table->dropColumn('ViewCount');
               $table->dropColumn('Paper');
          });
     }
}