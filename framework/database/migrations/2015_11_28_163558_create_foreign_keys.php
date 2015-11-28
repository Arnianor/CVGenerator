<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::table('skills',function (Blueprint $table) {
            $table->foreign('user_id')->reference('$id')->on('users');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('skills', function (Blueprint $table) {
            $table->dropForeign('skills_user_id_foreign');
        });
        */
    }
}
