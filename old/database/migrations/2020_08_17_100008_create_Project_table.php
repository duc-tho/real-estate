<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
     public function up()
     {
          Schema::create('project', function (Blueprint $table) {
               $table->increments('id');
               $table->string('title');
               $table->string('slug');
               $table->text('location');
               $table->text('investor');
               $table->unsignedInteger('number_of_block');
               $table->unsignedInteger('number_of_floor');
               $table->unsignedInteger('number_of_apartment');
               $table->unsignedDecimal('area_apartment');
               $table->unsignedDecimal('total_area');
               $table->unsignedInteger('year_built');
               $table->unsignedInteger('building_density');
               $table->unsignedDecimal('price')->default(0);
               $table->text('description')->nullable();
               $table->text('image');
               $table->timestamps();
               $table->softDeletes();
               $table->tinyInteger('Status')->default(1);
          });
     }

     public function down()
     {
          Schema::dropIfExists('project');
     }
}