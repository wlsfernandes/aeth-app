<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatedAtToErrorLogsTable extends Migration
{
    public function up()
    {
        Schema::table('error_logs', function (Blueprint $table) {
            $table->timestamp('updated_at')->nullable(); // Add only the `updated_at` column, making it nullable
        });
    }

    public function down()
    {
        Schema::table('error_logs', function (Blueprint $table) {
            $table->dropColumn('updated_at'); // Remove the `updated_at` column if rolled back
        });
    }
}
