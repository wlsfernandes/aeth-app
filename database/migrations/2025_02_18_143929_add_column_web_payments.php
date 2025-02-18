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
        Schema::table('web_payments', function (Blueprint $table) {
            $table->string('processed_by')->default('stripe')->nullable();
            $table->decimal('tax', 10, 2)->default(0);
            $table->decimal('totalAmount', 10, 2)->default(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('web_payments', function (Blueprint $table) {
            $table->dropColumn('processed_by');
            $table->dropColumn('tax');
            $table->dropColumn('totalAmount');
        });
    }
};
