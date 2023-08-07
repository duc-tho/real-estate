<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreetTable extends Migration
{
     public function up()
     {
          Schema::create('street', function (Blueprint $table) {
               $table->increments('id');
               $table->unsignedInteger('ward_id');
               $table->string('name');
               $table->timestamps();
               $table->tinyInteger('status')->default(1);
               $table->softDeletes();

               $table->foreign('ward_id')->references('id')->on('ward')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('street');
     }
}
