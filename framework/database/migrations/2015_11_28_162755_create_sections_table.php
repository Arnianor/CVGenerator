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
            // Index
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('cv_id')->unsigned();
            // end of index

            // Type of the section
            $table->string('type'); // skill, job, education, language, hobby
            $table->timestamps();
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
