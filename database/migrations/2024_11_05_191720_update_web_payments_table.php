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
        Schema::table('web_payments', function (Blueprint $table) {
            $table->dropColumn('name'); // Remove 'name' column
            $table->string('first_name')->after('id'); // Add 'first_name' column
            $table->string('last_name')->after('first_name'); // Add 'last_name' column
        });
    }

    public function down()
    {
        Schema::table('web_payments', function (Blueprint $table) {
            $table->string('name')->after('id'); // Re-add 'name' column if rolling back
            $table->dropColumn(['first_name', 'last_name']); // Remove 'first_name' and 'last_name'
        });
    }
};
