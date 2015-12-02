<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // Index
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('cv_id')->unsigned();
            // end of index

            // Type of the section
            $table->string('type'); // skill, job, education, language, hobby
            $table->timestamps();
        });

        Schema::table('sections', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sections');
    }
}
