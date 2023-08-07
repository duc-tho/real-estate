<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditAndAddColumnOnProjectTable extends Migration
{
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
          Schema::table('project', function (Blueprint $table) {
               $table->renameColumn('description', 'infrastructureLocation');
               $table->text('ground_design')->nullable()->default(null);
               $table->text('promotion')->nullable()->default(null);
               $table->text('utility')->nullable()->default(null);
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::table('project', function (Blueprint $table) {
               $table->renameColumn('infrastructureLocation', 'description');
               $table->dropColumn('ground_design');
               $table->dropColumn('promotion');
               $table->dropColumn('utility');
          });
     }
}