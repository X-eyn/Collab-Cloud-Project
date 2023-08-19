<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeamIdToActivityLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('activity_logs', function (Blueprint $table) {
        $table->unsignedBigInteger('team_id')->nullable()->after('user_id');
        $table->foreign('team_id')->references('id')->on('teams')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity_logs', function (Blueprint $table) {
            //
        });
    }
}
