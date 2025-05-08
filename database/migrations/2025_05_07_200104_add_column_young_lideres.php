<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('young_lideres', function (Blueprint $table) {
            $table->boolean('young_lideres_membership')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('young_lideres', function (Blueprint $table) {
            $table->dropColumn('young_lideres_membership');
        });
    }
};
