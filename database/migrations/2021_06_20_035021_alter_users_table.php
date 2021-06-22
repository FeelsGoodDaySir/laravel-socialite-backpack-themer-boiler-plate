<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->nullable()->change();
            $table->string('image', 1024)->after('remember_token')->nullable();
            $table->string('provider')->after('image')->nullable();
            $table->string('provider_id')->after('provider')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->change();
            $table->dropColumn('image');
            $table->dropColumn('provider');
            $table->dropColumn('provider_id');
        });
    }
}
