<?php

namespace App\Http\Controllers;

use App\Models\SimplePage;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SimplePageController extends Controller
{
    public function show($slug)
    {
        // Find the post by slug, ensuring it is published
        $simplePage = SimplePage::with('program.humanResource')
            ->where('slug', $slug)
            ->firstOrFail();

        // Return the view with the post data
        return view('pages.program.info', compact('simplePage'));
    }

    public function showAllPages()
    {
        $simplePages = SimplePage::with('program.humanResource')
            ->where('published', true)
            ->where('date_of_publication', '<=', Carbon::today())
            ->orderBy('date_of_publication', 'desc')
            ->paginate(3);

        return view('pages.aeth-pages', compact('simplePages'));
    }

}
