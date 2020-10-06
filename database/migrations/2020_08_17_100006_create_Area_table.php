<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
     public function up()
     {
          Schema::create('area', function (Blueprint $table) {

               $table->increments('AreaId');
               $table->unsignedInteger('DistrictId');
               $table->string('Name');
               $table->timestamps();
               $table->tinyInteger('Status')->default('1');

               $table->foreign('DistrictId')->references('DistrictId')->on('District')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('area');
     }
}