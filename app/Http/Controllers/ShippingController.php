<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;

class ShippingController extends Controller
{
    /**
     * Calculates the shipping cost based on the target ZIP code and product weight.
     *
     * This method retrieves the shipping zone based on the provided target ZIP code and determines
     * the shipping cost based on weight. If the weight is not provided or exceeds 10 pounds, an
     * error response is returned. If no shipping cost is found for the zone, an error message is sent.
     *
     * @param string $targetZip The destination ZIP code for shipping.
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse Returns a JSON response
     *         with the shipping cost or an error message with a redirection if applicable.
     *
     * @throws \Exception Returns an error message if an exception occurs during the process.
     */

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

    /**
     * Calculates the shipping zone based on ZIP code differences.
     *
     * This method extracts numeric values from the starting and target ZIP codes,
     * calculates the zone as the difference in the thousands place, and ensures
     * the zone remains within a range of 0 to 9.
     *
     * @param string $startingZip The originating ZIP code.
     * @param string $targetZip The destination ZIP code.
     * @return int The calculated shipping zone, constrained between 0 and 9.
     */

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
