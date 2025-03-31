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
        Schema::table('posts', function (Blueprint $table) {
            $table->text('content_en')->nullable()->change();
            $table->text('content_es')->nullable()->change();
            $table->text('content_pt')->nullable()->change();
            $table->text('summary_en')->nullable()->change();
            $table->text('summary_es')->nullable()->change();
            $table->text('summary_pt')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('content_en')->nullable(false)->change();
            $table->text('content_es')->nullable(false)->change();
            $table->text('content_pt')->nullable(false)->change();
            $table->text('summary_en')->nullable(false)->change();
            $table->text('summary_es')->nullable(false)->change();
            $table->text('summary_pt')->nullable(false)->change();
        });
    }
};
