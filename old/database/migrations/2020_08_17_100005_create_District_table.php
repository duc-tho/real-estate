<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictTable extends Migration
{
     public function up()
     {
          Schema::create('district', function (Blueprint $table) {
               $table->increments('id');
               $table->unsignedInteger('city_id');
               $table->string('name');
               $table->timestamps();
               $table->tinyInteger('status')->default(1);
               $table->softDeletes();

               $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('district');
     }
}
