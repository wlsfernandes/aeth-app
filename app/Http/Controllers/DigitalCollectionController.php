<?php

namespace App\Http\Controllers;
use App\Models\DigitalCollection;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Exception;

class DigitalCollectionController extends Controller
{
    public function acervo(): View
    {
        try {
            $digitalCollections = DigitalCollection::where('workflow','Published')->get();
            return view('pages.gonzalez-acervo', compact('digitalCollections'));
        } catch (Exception $e) {
            Log::error('Error fetching digitalCollections: ' . $e->getMessage());
            session()->now('error', 'An error occurred while fetching digitalCollections.');
            return redirect()->back();
        }
    }
}
