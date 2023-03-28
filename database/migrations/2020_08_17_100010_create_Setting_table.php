<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
     public function up()
     {
          Schema::create('setting', function (Blueprint $table) {
               $table->increments('id');
               $table->string('key');
               $table->text('value');
               $table->timestamps();
               $table->softDeletes();
          });
     }

     public function down()
     {
          Schema::dropIfExists('setting');
     }
}