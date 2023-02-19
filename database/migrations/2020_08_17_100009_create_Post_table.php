<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
     public function up()
     {
          Schema::create('post', function (Blueprint $table) {

               $table->increments('PostId');
               $table->unsignedInteger('StreetId');
               $table->unsignedInteger('UserId');
               $table->unsignedInteger('CategoryId');
               $table->unsignedInteger('ProjectId')->nullable()->default(null);
               $table->string('Title');
               $table->string('ApartmentNumber');
               $table->text('Street');
               $table->string('Direction')->nullable()->default(null);
               $table->unsignedInteger('Bedroom')->nullable()->default(null);
               $table->unsignedInteger('Bathroom')->nullable()->default(null);
               $table->unsignedDecimal('Width')->nullable()->default(null);
               $table->unsignedDecimal('Length')->nullable()->default(null);
               $table->string('Floor');
               $table->text('Image');
               $table->text('Description')->nullable()->default(null);
               $table->unsignedDecimal('Price')->default('0');
               $table->timestamps();
               $table->tinyInteger('Status')->default('1');

               $table->foreign('StreetId')->references('StreetId')->on('street')->onDelete('cascade');
               $table->foreign('UserId')->references('UserId')->on('user')->onDelete('cascade');
               $table->foreign('CategoryId')->references('CategoryId')->on('category')->onDelete('cascade');
               $table->foreign('ProjectId')->references('ProjectId')->on('project')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('post');
     }
}
