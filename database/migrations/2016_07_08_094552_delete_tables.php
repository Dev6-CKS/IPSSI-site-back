<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('medias');
        Schema::drop('cras');
        Schema::drop('holidays');
        Schema::drop('expense_reports');
        Schema::drop('news');
        Schema::drop('profiles');
        Schema::drop('offers');
        Schema::drop('applications');
        Schema::drop('cvs');
        Schema::drop('password_resets');
        Schema::drop('user_profiles');
        Schema::drop('messages');
        Schema::drop('message_has_users');
        Schema::drop('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
