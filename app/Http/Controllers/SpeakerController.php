<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function show($slug)
    {
        $speaker = Speaker::where('slug', $slug)->firstOrFail();

        return view('pages.speakers.show', compact('speaker'));
    }
}
