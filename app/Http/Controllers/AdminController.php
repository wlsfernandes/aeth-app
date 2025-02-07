<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortalContent;

class AdminController extends Controller
{
    public function audio()
    {
        return view('pages.exclusive.audio');
    }
    public function article()
    {
        return view('pages.exclusive.article');
    }

    public function category()
    {
        return view('pages.exclusive.category');
    }
    public function ebook()
    {
        return view('pages.exclusive.ebook');
    }
    public function spreadsheet()
    {
        return view('pages.exclusive.spreadsheet');
    }

    public function pdf()
    {
        $portal_contents = PortalContent::where('media_type', 'PDF')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.pdf', compact('portal_contents'));
    }

    public function powerpoint()
    {
        return view('pages.exclusive.powerpoint');
    }
    public function programs()
    {
        return view('pages.exclusive.programs');
    }

    public function videoGallery()
    {
        $portal_contents = PortalContent::where('media_type', 'Video')->get();
        return view('pages.exclusive.video-gallery', compact('portal_contents'));
    }

    public function antioquiaExclusive()
    {
        return view('pages.exclusive.antioquia');
    }
    public function capacityBuildingExclusive()
    {
        return view('pages.exclusive.capacity-building');
    }
    public function compellingPreachingExclusive()
    {
        return view('pages.exclusive.compelling-preaching');
    }
    public function gonzalezExclusive()
    {
        return view('pages.exclusive.gonzalez');
    }
    public function youngLideresExclusive()
    {
        return view('pages.exclusive.young-lideres');
    }

    public function showContent($id)
    {
        $portal_content = PortalContent::findOrFail($id);  // Fetch the content by ID

        // Directly return the view with the URL
        return view('pages.exclusive.content-view', compact('portal_content'));
    }


}
