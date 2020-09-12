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
               $table->text('Utility')->nullable()->default(null);
               $table->string('PriceUnit')->nullable()->default('Tỷ');
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
               $table->dropColumn('Utility');
               $table->dropColumn('PriceUnit');
          });
     }
}