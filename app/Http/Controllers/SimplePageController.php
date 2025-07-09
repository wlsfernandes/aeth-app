<?php

namespace App\Http\Controllers;

use App\Models\SimplePage;
use Illuminate\Http\Request;

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


}
