<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToFilesAndFolders extends Migration
{
    public function up()
{
    Schema::table('files', function (Blueprint $table) {
        $table->timestamp('deleted_at')->nullable()->after('updated_at');
    });

    Schema::table('folders', function (Blueprint $table) {
        $table->timestamp('deleted_at')->nullable()->after('updated_at');
    });
}

public function down()
{
    Schema::table('files', function (Blueprint $table) {
        $table->dropColumn('deleted_at');
    });

    Schema::table('folders', function (Blueprint $table) {
        $table->dropColumn('deleted_at');
    });
}

}
