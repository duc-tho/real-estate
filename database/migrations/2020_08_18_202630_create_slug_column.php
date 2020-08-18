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
          Schema::table('area', function (Blueprint $table) {
               $table->string('Slug');
          });

          Schema::table('category', function (Blueprint $table) {
               $table->string('Slug');
          });

          Schema::table('city', function (Blueprint $table) {
               $table->string('Slug');
          });

          Schema::table('district', function (Blueprint $table) {
               $table->string('Slug');
          });

          Schema::table('street', function (Blueprint $table) {
               $table->string('Slug');
          });

          Schema::table('post', function (Blueprint $table) {
               $table->string('Slug');
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::table('area', function (Blueprint $table) {
               $table->dropColumn('Slug');
          });

          Schema::table('category', function (Blueprint $table) {
               $table->dropColumn('Slug');
          });

          Schema::table('city', function (Blueprint $table) {
               $table->dropColumn('Slug');
          });

          Schema::table('district', function (Blueprint $table) {
               $table->dropColumn('Slug');
          });

          Schema::table('street', function (Blueprint $table) {
               $table->dropColumn('Slug');
          });

          Schema::table('post', function (Blueprint $table) {
               $table->dropColumn('Slug');
          });
     }
}
