<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->morphs('objectable');
            $table->foreignId('parent_id')->nullable()->constrained('objects');
            $table->foreignId('team_id')->constrained('teams');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('objs');
    }
};
