<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
     public function up()
     {
          Schema::create('Category', function (Blueprint $table) {

               $table->increments('CategoryId');
               $table->string('Name');
               $table->unsignedInteger('ParentId');
               $table->timestamps();
               $table->tinyInteger('Status')->default('1');

          });
     }

     public function down()
     {
          Schema::dropIfExists('Category');
     }
}