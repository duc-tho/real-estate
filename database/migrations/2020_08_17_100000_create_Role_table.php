<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
     public function up()
     {
          Schema::create('role', function (Blueprint $table) {

               $table->increments('RoleId');
               $table->string('Name');
               $table->timestamps();
               $table->tinyInteger('Status')->default('1');
          });
     }

     public function down()
     {
          Schema::dropIfExists('role');
     }
}
