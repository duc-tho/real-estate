<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
     public function up()
     {
          Schema::create('user', function (Blueprint $table) {
               $table->increments('id');
               $table->unsignedInteger('role_id');
               $table->string('email')->unique();
               $table->string('phone_number', 11);
               $table->string('first_name');
               $table->string('last_name');
               $table->string('gender')->nullable();
               $table->date('birthday')->nullable();
               $table->string('username');
               $table->string('password');
               $table->text('profile_image')->nullable();
               $table->timestamp('email_verified_at')->nullable();
               $table->timestamps();
               $table->softDeletes();
               $table->rememberToken();
               $table->tinyInteger('status')->default(1);

               $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
          });
     }

     public function down()
     {
          Schema::dropIfExists('user');
     }
}
