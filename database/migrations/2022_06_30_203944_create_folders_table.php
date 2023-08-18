<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->foreignId('team_id')->constrained('teams');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('folders');
    }
};
