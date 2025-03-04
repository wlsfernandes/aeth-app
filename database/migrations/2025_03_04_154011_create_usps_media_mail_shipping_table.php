<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the usps_media_mail_shipping table
        Schema::create('usps_media_mail_shippings', function (Blueprint $table) {
            $table->id();
            $table->decimal('weight_not_over', 8, 2);
            $table->decimal('rate', 8, 2);
            $table->timestamps();
        });

        // Insert USPS Media Mail rates
        $rates = [];
        $base_rate = 4.63;
        $increment = 0.75;
        for ($weight = 1; $weight <= 70; $weight++) {
            $rates[] = ['weight_not_over' => $weight, 'rate' => $base_rate];
            $base_rate += $increment;
        }

        DB::table('usps_media_mail_shippings')->insert($rates);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usps_media_mail_shippings');
    }
};
