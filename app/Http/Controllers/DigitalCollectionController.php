<?php

namespace App\Http\Controllers;

use App\Models\DigitalCollection;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Http\RedirectResponse;

/**
 * Class DigitalCollectionController
 *
 * Handles retrieving and displaying digital collections.
 *
 * @package App\Http\Controllers
 */
class DigitalCollectionController extends Controller
{
    /**
     * Display the digital collection (Acervo).
     *
     * This method retrieves all published digital collections from the database and
     * passes them to the corresponding view. If an error occurs, it logs the error
     * and redirects the user back with an error message.
     *
     * @return View|RedirectResponse Returns the view with the digital collections if successful,
     *                               otherwise redirects back with an error message.
     */
    public function acervo(): View|RedirectResponse
    {
        try {
            // Retrieve all published digital collections
            $digitalCollections = DigitalCollection::where('workflow', 'Published')->paginate(12);

            return view('pages.gonzalez-acervo', compact('digitalCollections'));
        } catch (Exception $e) {
            // Log the error for debugging
            Log::error('Error fetching digitalCollections: ' . $e->getMessage());

            // Display an error message and redirect back
            session()->now('error', 'An error occurred while fetching digitalCollections.');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $digitalCollection = DigitalCollection::findOrFail($id);
        return view('pages.digital-collections-details', compact('digitalCollection'));
    }
}
