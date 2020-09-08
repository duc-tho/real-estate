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
               $table->renameColumn('Description', 'InfrastructureLocation');
               $table->text('GroundDesign')->nullable()->default(null);
               $table->text('Promotion')->nullable()->default(null);
               $table->text('Utility')->nullable()->default(null);
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
               $table->renameColumn('InfrastructureLocation', 'Description');
               $table->dropColumn('GroundDesign');
               $table->dropColumn('Promotion');
               $table->dropColumn('Utility');
          });
     }
}