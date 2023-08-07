<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditStatusColumnInDistrictTable extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('district', function (Blueprint $table) {
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
          Schema::table('district', function (Blueprint $table) {
               $table->integer('status')->default(1)->change();
          });
     }
}