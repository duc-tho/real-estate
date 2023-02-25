<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictTable extends Migration
{
     public function up()
     {
          Schema::create('district', function (Blueprint $table) {

               $table->increments('DistrictId');
               $table->unsignedInteger('CityId');
               $table->string('Name');
               $table->timestamps();
               $table->tinyInteger('Status')->default('1');

               $table->foreign('CityId')->references('CityId')->on('city')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('district');
     }
}
