<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use App\Models\Faq;
use Exception;

use Illuminate\Http\Request;

class CapacityBuildingController extends Controller
{
    public function application(): View
    {
        try {
            $faqs = Faq::all();
            return view('pages.application', compact('faqs'));
        } catch (Exception $e) {
            Log::error('Error fetching capacitybuildings: ' . $e->getMessage());
            session()->now('error', 'An error occurred while fetching capacitybuildings.');
            return redirect()->back();
        }
    }

}
