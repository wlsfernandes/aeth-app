<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('error_logs', function (Blueprint $table) {
            $table->text('error_message')->change(); // Change `error_message` to text
        });
    }

    public function down()
    {
        Schema::table('error_logs', function (Blueprint $table) {
            $table->string('error_message', 255)->change(); // Revert back to string
        });
    }
};
