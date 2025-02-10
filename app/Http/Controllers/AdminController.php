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
    /*Begin*/
    public function aethEvents()
    {
        $portal_contents = PortalContent::where('category', 'AETH Events')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.aeth-events', compact('portal_contents'));
    }

    public function assemblies()
    {
        $portal_contents = PortalContent::where('category', 'Assemblies')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.assemblies', compact('portal_contents'));
    }
    public function conversatorios()
    {
        $portal_contents = PortalContent::where('category', 'Conversatorios')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.conversatorios', compact('portal_contents'));
    }
    public function lectures()
    {
        $portal_contents = PortalContent::where('category', 'Lectures Series')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.lectures', compact('portal_contents'));
    }
    public function elet()
    {
        $portal_contents = PortalContent::where('category', '3ELET')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.conversatorios', compact('portal_contents'));
    }

    public function programs()
    {
        return view('pages.exclusive.programs');
    }
    public function aethProgram()
    {
        $portal_contents = PortalContent::where('program', 'AETH')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.aeth-program', compact('portal_contents'));
    }

    public function antioquiaExclusive()
    {
        $portal_contents = PortalContent::where('program', 'Antioquia')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.antioquia', compact('portal_contents'));
    }
    public function capacityBuildingExclusive()
    {
        $portal_contents = PortalContent::where('program', 'Capacity Building')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.capacity-building', compact('portal_contents'));
    }
    public function compellingPreachingExclusive()
    {
        $portal_contents = PortalContent::where('program', 'Compelling Preaching')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.compelling-preaching', compact('portal_contents'));
    }
    public function gonzalezExclusive()
    {
        $portal_contents = PortalContent::where('program', 'González Center')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.gonzalez', compact('portal_contents'));
    }
    public function youngLideresExclusive()
    {
        $portal_contents = PortalContent::where('program', 'Young Líderes')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.young-lideres', compact('portal_contents'));
    }

    public function showContent($id)
    {
        $portal_content = PortalContent::findOrFail($id);  // Fetch the content by ID

        // Directly return the view with the URL
        return view('pages.exclusive.content-view', compact('portal_content'));
    }


}
