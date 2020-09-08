<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgressStreetidColumnToProjectTable extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('project', function (Blueprint $table) {
               $table->unsignedInteger('Progress')->nullable();
               $table->unsignedInteger('StreetId')->nullable()->default(null);
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::table('project', function (Blueprint $table) {
               $table->dropColumn('Progress');
               $table->dropColumn('StreetId');
          });
     }
}