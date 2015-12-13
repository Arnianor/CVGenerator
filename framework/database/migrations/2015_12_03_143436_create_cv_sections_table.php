<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_section', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id')->unsigned()->index();
            $table->integer('cv_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::table('cv_section', function(Blueprint $table){
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');
        });

        Schema::table('sections',function(Blueprint $table){
            $table->dropForeign('sections_cv_id_foreign');
            $table->dropColumn('cv_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('cv_section');

        Schema::table('sections',function(Blueprint $table){
            $table->integer('cv_id')->unsigned();
            $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');
        });

    }
}
