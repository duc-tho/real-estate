<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityTable extends Migration
{
     public function up()
     {
          Schema::create('City', function (Blueprint $table) {

               $table->increments('CityId');
               $table->string('Name');
               $table->timestamps();
               $table->tinyInteger('Status')->default('1');

          });
     }

     public function down()
     {
          Schema::dropIfExists('City');
     }
}