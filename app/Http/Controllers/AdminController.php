<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortalContent;
use App\Models\Member;

class AdminController extends Controller
{

    public function profile()
    {
        $user = auth()->user()->load('member');
        $member = Member::where('user_id', $user->id)->first();
        return view('pages.exclusive.profile', compact('user', 'member'));
    }
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
        $portal_contents = PortalContent::where('event', 'AETH Events')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.aeth-events', compact('portal_contents'));
    }

    public function assemblies()
    {
        $portal_contents = PortalContent::where('event', 'Assemblies')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.assemblies', compact('portal_contents'));
    }
    public function conversatorios()
    {
        $portal_contents = PortalContent::where('event', 'Conversatorios')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.conversatorios', compact('portal_contents'));
    }
    public function lectures()
    {
        $portal_contents = PortalContent::where('event', 'Lecture Series')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.lectures', compact('portal_contents'));
    }
    public function elet()
    {
        $portal_contents = PortalContent::where('event', '3ELET')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.conversatorios', compact('portal_contents'));
    }

    public function programs()
    {
        return view('pages.exclusive.programs');
    }

    public function findByEvent()
    {
        return view('pages.exclusive.find-event');
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

    public function articles()
    {
        $portal_contents = PortalContent::where('category', 'Articles')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.articles', compact('portal_contents'));
    }

    public function bibleStudies()
    {
        $portal_contents = PortalContent::where('category', 'Bible Studies')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.bible-studies', compact('portal_contents'));
    }
    public function conference()
    {
        $portal_contents = PortalContent::where('category', 'Conference')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.conference', compact('portal_contents'));
    }

    public function sermons()
    {
        $portal_contents = PortalContent::where('category', 'Sermons')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.sermons', compact('portal_contents'));
    }

    public function workshops()
    {
        $portal_contents = PortalContent::where('category', 'Workshops')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.workshops', compact('portal_contents'));
    }
    public function others()
    {
        $portal_contents = PortalContent::where('category', 'Others')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.others', compact('portal_contents'));
    }

    public function showContent($id)
    {
        $portal_content = PortalContent::findOrFail($id);  // Fetch the content by ID

        // Directly return the view with the URL
        return view('pages.exclusive.content-view', compact('portal_content'));
    }


}
