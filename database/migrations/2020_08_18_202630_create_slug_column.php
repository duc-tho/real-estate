<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlugColumn extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('ward', function (Blueprint $table) {
               $table->string('slug');
          });

          Schema::table('category', function (Blueprint $table) {
               $table->string('slug');
          });

          Schema::table('city', function (Blueprint $table) {
               $table->string('slug');
          });

          Schema::table('district', function (Blueprint $table) {
               $table->string('slug');
          });

          Schema::table('street', function (Blueprint $table) {
               $table->string('slug');
          });

          Schema::table('post', function (Blueprint $table) {
               $table->string('slug');
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::table('ward', function (Blueprint $table) {
               $table->dropColumn('slug');
          });

          Schema::table('category', function (Blueprint $table) {
               $table->dropColumn('slug');
          });

          Schema::table('city', function (Blueprint $table) {
               $table->dropColumn('slug');
          });

          Schema::table('district', function (Blueprint $table) {
               $table->dropColumn('slug');
          });

          Schema::table('street', function (Blueprint $table) {
               $table->dropColumn('slug');
          });

          Schema::table('post', function (Blueprint $table) {
               $table->dropColumn('slug');
          });
     }
}
