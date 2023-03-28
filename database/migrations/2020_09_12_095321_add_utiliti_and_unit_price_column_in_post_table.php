<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUtilitiAndUnitPriceColumnInPostTable extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('post', function (Blueprint $table) {
               $table->text('utility')->nullable()->default(null);
               $table->string('price_unit')->nullable()->default('Tỷ');
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
               $table->dropColumn('utility');
               $table->dropColumn('price_unit');
          });
     }
}