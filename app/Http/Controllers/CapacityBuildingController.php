<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use App\Models\Faq;
use Exception;
use Illuminate\Http\Request;

/**
 * Class CapacityBuildingController
 *
 * This controller handles the display of capacity-building applications,
 * including retrieving FAQs related to the application process.
 *
 * @package App\Http\Controllers
 */
class CapacityBuildingController extends Controller
{
    /**
     * Display the application page with FAQs.
     *
     * This method retrieves all FAQs from the database and passes them
     * to the application view. If an error occurs, it logs the error
     * and redirects the user back with an error message.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function application(): View
    {
        try {
            // Retrieve all FAQ entries
            $faqs = Faq::all();
            return view('pages.application', compact('faqs'));
        } catch (Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error fetching capacity-building FAQs: ' . $e->getMessage());

            // Display an error message and redirect back
            session()->now('error', 'An error occurred while fetching capacity-building FAQs.');
            return redirect()->back();
        }
    }
}
