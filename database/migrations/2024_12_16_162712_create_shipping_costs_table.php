<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('shipping_costs', function (Blueprint $table) {
        $table->id();
        
        $table->integer('zone')->unsigned(); // Shipping zone (e.g., 1-8)
        $table->decimal('weight', 8, 2); // Weight in pounds (e.g., up to 70 lbs)
        $table->decimal('cost', 8, 2); // Cost for shipping
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_costs');
    }
};
