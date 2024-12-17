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
            // Zone 1
        ['zone' => 1, 'weight' => 1.00, 'cost' => 8.70],
        ['zone' => 1, 'weight' => 2.00, 'cost' => 9.50],
        ['zone' => 1, 'weight' => 3.00, 'cost' => 10.20],
        ['zone' => 1, 'weight' => 4.00, 'cost' => 10.95],
        ['zone' => 1, 'weight' => 5.00, 'cost' => 11.65],
        ['zone' => 1, 'weight' => 6.00, 'cost' => 12.35],
        ['zone' => 1, 'weight' => 7.00, 'cost' => 13.05],
        ['zone' => 1, 'weight' => 8.00, 'cost' => 13.75],
        ['zone' => 1, 'weight' => 9.00, 'cost' => 14.45],
        ['zone' => 1, 'weight' => 10.00, 'cost' => 15.15],

        // Zone 2
        ['zone' => 2, 'weight' => 1.00, 'cost' => 9.20],
        ['zone' => 2, 'weight' => 2.00, 'cost' => 10.10],
        ['zone' => 2, 'weight' => 3.00, 'cost' => 10.90],
        ['zone' => 2, 'weight' => 4.00, 'cost' => 11.70],
        ['zone' => 2, 'weight' => 5.00, 'cost' => 12.50],
        ['zone' => 2, 'weight' => 6.00, 'cost' => 13.30],
        ['zone' => 2, 'weight' => 7.00, 'cost' => 14.10],
        ['zone' => 2, 'weight' => 8.00, 'cost' => 14.90],
        ['zone' => 2, 'weight' => 9.00, 'cost' => 15.70],
        ['zone' => 2, 'weight' => 10.00, 'cost' => 16.50],

        // Zone 3
        ['zone' => 3, 'weight' => 1.00, 'cost' => 9.65],
        ['zone' => 3, 'weight' => 2.00, 'cost' => 10.70],
        ['zone' => 3, 'weight' => 3.00, 'cost' => 11.60],
        ['zone' => 3, 'weight' => 4.00, 'cost' => 12.55],
        ['zone' => 3, 'weight' => 5.00, 'cost' => 13.45],
        ['zone' => 3, 'weight' => 6.00, 'cost' => 14.35],
        ['zone' => 3, 'weight' => 7.00, 'cost' => 15.25],
        ['zone' => 3, 'weight' => 8.00, 'cost' => 16.15],
        ['zone' => 3, 'weight' => 9.00, 'cost' => 17.05],
        ['zone' => 3, 'weight' => 10.00, 'cost' => 17.95],

        // Zone 4
        ['zone' => 4, 'weight' => 1.00, 'cost' => 10.20],
        ['zone' => 4, 'weight' => 2.00, 'cost' => 11.35],
        ['zone' => 4, 'weight' => 3.00, 'cost' => 12.35],
        ['zone' => 4, 'weight' => 4.00, 'cost' => 13.40],
        ['zone' => 4, 'weight' => 5.00, 'cost' => 14.40],
        ['zone' => 4, 'weight' => 6.00, 'cost' => 15.40],
        ['zone' => 4, 'weight' => 7.00, 'cost' => 16.40],
        ['zone' => 4, 'weight' => 8.00, 'cost' => 17.40],
        ['zone' => 4, 'weight' => 9.00, 'cost' => 18.40],
        ['zone' => 4, 'weight' => 10.00, 'cost' => 19.40],

        // Zone 5
        ['zone' => 5, 'weight' => 1.00, 'cost' => 10.80],
        ['zone' => 5, 'weight' => 2.00, 'cost' => 12.00],
        ['zone' => 5, 'weight' => 3.00, 'cost' => 13.10],
        ['zone' => 5, 'weight' => 4.00, 'cost' => 14.20],
        ['zone' => 5, 'weight' => 5.00, 'cost' => 15.25],
        ['zone' => 5, 'weight' => 6.00, 'cost' => 16.35],
        ['zone' => 5, 'weight' => 7.00, 'cost' => 17.45],
        ['zone' => 5, 'weight' => 8.00, 'cost' => 18.55],
        ['zone' => 5, 'weight' => 9.00, 'cost' => 19.65],
        ['zone' => 5, 'weight' => 10.00, 'cost' => 20.75],

        // Zone 6
        ['zone' => 6, 'weight' => 1.00, 'cost' => 11.35],
        ['zone' => 6, 'weight' => 2.00, 'cost' => 12.65],
        ['zone' => 6, 'weight' => 3.00, 'cost' => 13.80],
        ['zone' => 6, 'weight' => 4.00, 'cost' => 14.95],
        ['zone' => 6, 'weight' => 5.00, 'cost' => 16.10],
        ['zone' => 6, 'weight' => 6.00, 'cost' => 17.25],
        ['zone' => 6, 'weight' => 7.00, 'cost' => 18.40],
        ['zone' => 6, 'weight' => 8.00, 'cost' => 19.55],
        ['zone' => 6, 'weight' => 9.00, 'cost' => 20.70],
        ['zone' => 6, 'weight' => 10.00, 'cost' => 21.85],

        // Zone 7
        ['zone' => 7, 'weight' => 1.00, 'cost' => 11.90],
        ['zone' => 7, 'weight' => 2.00, 'cost' => 13.30],
        ['zone' => 7, 'weight' => 3.00, 'cost' => 14.55],
        ['zone' => 7, 'weight' => 4.00, 'cost' => 15.80],
        ['zone' => 7, 'weight' => 5.00, 'cost' => 17.05],
        ['zone' => 7, 'weight' => 6.00, 'cost' => 18.30],
        ['zone' => 7, 'weight' => 7.00, 'cost' => 19.55],
        ['zone' => 7, 'weight' => 8.00, 'cost' => 20.80],
        ['zone' => 7, 'weight' => 9.00, 'cost' => 22.05],
        ['zone' => 7, 'weight' => 10.00, 'cost' => 23.30],

        // Zone 8
        ['zone' => 8, 'weight' => 1.00, 'cost' => 11.90],
        ['zone' => 8, 'weight' => 2.00, 'cost' => 13.30],
        ['zone' => 8, 'weight' => 3.00, 'cost' => 14.55],
        ['zone' => 8, 'weight' => 4.00, 'cost' => 15.80],
        ['zone' => 8, 'weight' => 5.00, 'cost' => 17.05],
        ['zone' => 8, 'weight' => 6.00, 'cost' => 18.30],
        ['zone' => 8, 'weight' => 7.00, 'cost' => 19.55],
        ['zone' => 8, 'weight' => 8.00, 'cost' => 20.80],
        ['zone' => 8, 'weight' => 9.00, 'cost' => 22.05],
        ['zone' => 8, 'weight' => 10.00, 'cost' => 23.30],

        // Zone 9
        ['zone' => 9, 'weight' => 1.00, 'cost' => 11.90],
        ['zone' => 9, 'weight' => 2.00, 'cost' => 13.30],
        ['zone' => 9, 'weight' => 3.00, 'cost' => 14.55],
        ['zone' => 9, 'weight' => 4.00, 'cost' => 15.80],
        ['zone' => 9, 'weight' => 5.00, 'cost' => 17.05],
        ['zone' => 9, 'weight' => 6.00, 'cost' => 18.30],
        ['zone' => 9, 'weight' => 7.00, 'cost' => 19.55],
        ['zone' => 9, 'weight' => 8.00, 'cost' => 20.80],
        ['zone' => 9, 'weight' => 9.00, 'cost' => 22.05],
        ['zone' => 9, 'weight' => 10.00, 'cost' => 23.30],
        ];

        DB::table('shipping_costs')->insert($shippingCosts);
    }
}