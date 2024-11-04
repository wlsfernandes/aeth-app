<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function videoGallery()
    {
        return view('pages.video-gallery');
    }
    
}
