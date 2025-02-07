<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Faq;


class HomeController extends Controller
{
    public function index()
    {
        $articles = Post::where('published', true)
            ->whereHas('postType', function ($query) {
                $query->where('name', 'blog');
            })
            ->orderBy('published_at', 'desc')
            ->get();

        $events = Post::where('published', true)
            ->whereHas('postType', function ($query) {
                $query->where('name', 'event');
            })
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('home', compact('articles', 'events'));
    }

    public function aboutUs()
    {
        return view('pages.about_us');
    }
    public function testimonials()
    {
        return view('pages.testimonials');
    }

    public function ourTeam()
    {
        return view('pages.our_team');
    }

    public function openPositions()
    {
        return view('pages.open_positions');
    }


    public function blog()
    {
        return view('pages.blog');
    }

    public function contactUs()
    {
        return view('pages.contact_us');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function certificationProgram()
    {
        return view('pages.certification_program');
    }

    public function requestCertification()
    {
        return view('pages.request_certification');
    }

    public function certifiedInstitutions()
    {
        return view('pages.certified_institutions');
    }

    public function memberships()
    {
        return view('pages.memberships');
    }


    public function antioquia()
    {
        return view('pages.antioquia');
    }

    public function resourceCenter()
    {
        return view('pages.resource_center');
    }
    public function youngLeaders()
    {
        return view('pages.young-leaders');
    }
    public function compellingPreaching()
    {
        return view('pages.compelling_preaching');
    }


    public function donations()
    {
        return view('pages.donations');
    }

    public function aethFund()
    {
        return view('pages.aeth_fund');
    }

    public function gonzalezCenter()
    {
        return view('pages.gonzalez_center');
    }
    public function test()
    {
        return view('pages.test');
    }

    public function webApplication()
    {
        $faqs = Faq::all();
        return view('pages.web-application', compact('faqs'));
    }

    public function application()
    {
        return view('pages.application');
    }
    public function capacityBuilding()
    {
        return view('pages.capacity-building');
    }


}
