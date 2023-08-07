<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardTable extends Migration
{
     public function up()
     {
          Schema::create('ward', function (Blueprint $table) {
               $table->increments('id');
               $table->unsignedInteger('district_id');
               $table->string('name');
               $table->timestamps();
               $table->tinyInteger('status')->default(1);
               $table->softDeletes();

               $table->foreign('district_id')->references('id')->on('district')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('ward');
     }
}
