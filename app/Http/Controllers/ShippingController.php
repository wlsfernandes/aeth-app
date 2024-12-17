<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping; // Import the ShippingCost model

class ShippingController extends Controller
{
    public function calculateShippingCost($targetZip)
    {
        $startingZip = '32867'; // Your fixed starting zip code
        $zone = $this->calculateAreaFromZip($startingZip, $targetZip); // Call the method using $this

        $shippingCost = Shipping::where('zone', $zone)->first();

        if (!$shippingCost) {
            return response()->json(['error' => 'No shipping cost found for this zone'], 404);
        }

        return response()->json([
            'starting_zip' => $startingZip,
            'target_zip' => $targetZip,
            'zone' => $zone,
            'cost' => $shippingCost->cost
        ]);
    }

    private function calculateAreaFromZip($startingZip, $targetZip)
    {
        // Extract numeric values from the zip codes
        $startingZipNumeric = (int) preg_replace('/[^0-9]/', '', $startingZip);
        $targetZipNumeric = (int) preg_replace('/[^0-9]/', '', $targetZip);

        // Calculate the zone as the difference in the thousands place
        $zone = abs(floor($targetZipNumeric / 1000) - floor($startingZipNumeric / 1000));

        return min($zone, 9); // Ensure the zone stays between 0 and 9
    }
}
