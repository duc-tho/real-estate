<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
     public function up()
     {
          Schema::create('post', function (Blueprint $table) {
               $table->increments('id');
               $table->unsignedInteger('street_id');
               $table->unsignedInteger('user_id');
               $table->unsignedInteger('category_id');
               $table->unsignedInteger('project_id')->nullable()->default(null);
               $table->string('title');
               $table->string('apartment_number');
               $table->text('street');
               $table->string('direction')->nullable()->default(null);
               $table->unsignedInteger('bedroom')->nullable()->default(null);
               $table->unsignedInteger('bathroom')->nullable()->default(null);
               $table->unsignedDecimal('width')->nullable()->default(null);
               $table->unsignedDecimal('length')->nullable()->default(null);
               $table->string('floor');
               $table->text('image');
               $table->text('description')->nullable()->default(null);
               $table->unsignedDecimal('price')->default(0);
               $table->timestamps();
               $table->softDeletes();
               $table->tinyInteger('status')->default(1);

               $table->foreign('street_id')->references('id')->on('street')->onDelete('cascade');
               $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
               $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
               $table->foreign('project_id')->references('id')->on('project')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('post');
     }
}
