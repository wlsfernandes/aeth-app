<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;

class ShippingController extends Controller
{

    public function calculateShippingCost($targetZip)
    {
        try {
            $startingZip = '32867'; // PO Box Orlando, Florida
            $weight = request()->input('weight');

            // Check if weight is null and redirect
            if (is_null($weight)) {
                return response()->json([
                    'error' => 'Error to calculate shipment. Product Weight is empty',
                    'redirect' => route('bookstore')
                ]);
            }

            // Check if weight exceeds 10 pounds and throw exception
            if ($weight > 10) {
                return response()->json([
                    'error' => 'Weight exceeds the allowed limit of 10 pounds.',
                    'redirect' => route('bookstore')
                ]);
            }

            $roundedWeight = round($weight);
            $zone = $this->calculateAreaFromZip($startingZip, $targetZip); 

            // Find shipping cost based on zone and weight
            $shippingCost = Shipping::where('zone', $zone)
                ->where('weight', '>=', $roundedWeight)
                ->first();

            // If no shipping cost is found, return an error response
            if (!$shippingCost) {
                return response()->json([
                    'error' => 'No Shipping cost for this zone',
                    'redirect' => route('bookstore')
                ]);
            }
            return response()->json([
                'starting_zip' => $startingZip,
                'target_zip' => $targetZip,
                'zone' => $zone,
                'cost' => $shippingCost->cost
            ]);

        } catch (\Exception $e) {
            return redirect()->route('bookstore')->with('error', $e->getMessage());
        }
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
