<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingCostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $shippingCosts = [
            ['area' => 0, 'cost' => 5.00],
            ['area' => 1, 'cost' => 7.50],
            ['area' => 2, 'cost' => 6.75],
            ['area' => 3, 'cost' => 6.75],
            ['area' => 4, 'cost' => 6.75],
            ['area' => 5, 'cost' => 6.75],
            ['area' => 6, 'cost' => 6.75],
            ['area' => 7, 'cost' => 6.75],
            ['area' => 8, 'cost' => 6.75],
            ['area' => 9, 'cost' => 10.00],
        ];
        DB::table('shipping_costs')->insert($shippingCosts);
    }
}