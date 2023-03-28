<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignForStreetidColumnToProjectTable extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('project', function (Blueprint $table) {
               $table->foreign('street_id')->references('id')->on('street')->onDelete('cascade');
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
               $table->dropForeign('project_street_id_foreign');
          });
     }
}
