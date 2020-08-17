<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeColumnInPostTable extends Migration
{
     /**
          * Run the migrations.
          *
          * @return void
          */
     public function up()
     {
          Schema::table('post', function (Blueprint $table) {
               $table->string('Type');
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
               $table->dropColumn('Type');
          });
     }
}