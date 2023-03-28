<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
     public function up()
     {
          Schema::create('category', function (Blueprint $table) {
               $table->increments('id');
               $table->string('name');
               $table->unsignedInteger('parent');
               $table->timestamps();
               $table->softDeletes();
               $table->tinyInteger('status')->default(1);
          });
     }

     public function down()
     {
          Schema::dropIfExists('category');
     }
}