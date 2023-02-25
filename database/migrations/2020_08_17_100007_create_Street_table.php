<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreetTable extends Migration
{
     public function up()
     {
          Schema::create('street', function (Blueprint $table) {

               $table->increments('StreetId');
               $table->unsignedInteger('AreaId');
               $table->string('Name');
               $table->timestamps();
               $table->tinyInteger('Status')->default('1');

               $table->foreign('AreaId')->references('AreaId')->on('area')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('street');
     }
}
