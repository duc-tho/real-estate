<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
     public function up()
     {
          Schema::create('project', function (Blueprint $table) {

               $table->increments('ProjectId');
               $table->string('Title');
               $table->string('Slug');
               $table->text('Location');
               $table->text('Investor');
               $table->unsignedInteger('NumberOfBlock');
               $table->unsignedInteger('NumberOfFloor');
               $table->unsignedInteger('NumberOfApartment');
               $table->unsignedDecimal('AreaApartment');
               $table->unsignedDecimal('TotalArea');
               $table->unsignedInteger('YearBuilt');
               $table->unsignedInteger('BuildingDensity');
               $table->unsignedDecimal('Price')->default('0');
               $table->text('Description')->nullable()->default('NULL');
               $table->text('Image');
               $table->timestamps();
               $table->tinyInteger('Status')->default('1');
          });
     }

     public function down()
     {
          Schema::dropIfExists('project');
     }
}