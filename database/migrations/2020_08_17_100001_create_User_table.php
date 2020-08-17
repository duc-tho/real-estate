<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
     public function up()
     {
               Schema::create('User', function (Blueprint $table) {

                    $table->increments('UserId');
                    $table->unsignedInteger('RoleId');
                    $table->string('Email')->unique();
                    $table->string('PhoneNumber', 11);
                    $table->string('FirstName');
                    $table->string('LastName');
                    $table->string('Gender')->nullable()->default('NULL');
                    $table->date('Birthday')->nullable();
                    $table->string('Username');
                    $table->string('Password');
                    $table->text('ProfileImage')->nullable()->default('NULL');
                    $table->timestamp('email_verified_at')->nullable();
                    $table->timestamps();
                    $table->rememberToken();
                    $table->tinyInteger('Status')->default('1');

                    $table->foreign('RoleId')->references('RoleId')->on('Role')->onDelete('cascade');

               });
     }

     public function down()
     {
          Schema::dropIfExists('User');
     }
}