<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
     public function up()
     {
          Schema::create('Setting', function (Blueprint $table) {

               $table->increments('SettingId');
               $table->string('Name');
               $table->timestamps();
               $table->text('Value');

          });
     }

     public function down()
     {
          Schema::dropIfExists('Setting');
     }
}