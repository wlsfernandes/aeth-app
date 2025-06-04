<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\View\View;

/**
 * Class HomeController
 *
 * Handles the main website navigation, including pages such as home, about us, blog,
 * team, membership, certification programs, and events.
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Display the homepage with articles and events.
     *
     * Fetches published blog posts and events to display on the home page.
     *
     * @return View
     */
    public function index(): View
    {
        $articles = Post::where('published', true)
            ->whereHas('postType', function ($query) {
                $query->where('name', 'blog');
            })
            ->where('published', true)
            ->whereDate('date_of_publication', '<=', Carbon::today())
            ->orderBy('date_of_publication', 'desc')
            ->limit(3)
            ->get();

        $events = Post::where('published', true)
            ->whereHas('postType', function ($query) {
                $query->where('name', 'event');
            })
            ->where('published', true)
            ->whereDate('date_of_publication', '<=', Carbon::today())
            ->orderBy('date_of_event', 'desc')
            ->limit(3)
            ->get();

        return view('home', compact('articles', 'events'));
        //    return view('soon', compact('articles', 'events'));
    }




    /**
     * Display the Thank You page.
     *
     * @return View
     */
    public function gracias($text): View
    {
        return view('pages.gracias', compact('text'));
    }

    /**
     * Display the Thank You page to members.
     *
     * @return View
     */
    public function thankYouMember(): View
    {
        return view('pages.thank-you-member');
    }

    /**
     * Display the About Us page.
     *
     * @return View
     */
    public function aboutUs(): View
    {
        return view('pages.about_us');
    }

    /**
     * Display the Testimonials page.
     *
     * @return View
     */
    public function testimonials(): View
    {
        return view('pages.testimonials');
    }

    /**
     * Display the Our Team page.
     *
     * @return View
     */
    public function ourTeam(): View
    {
        return view('pages.our_team');
    }

    /**
     * Display the Open Positions page.
     *
     * @return View
     */
    public function openPositions(): View
    {
        return view('pages.open_positions');
    }

    /**
     * Display the Blog page.
     *
     * @return View
     */
    public function blog(): View
    {
        return view('pages.blog');
    }

    /**
     * Display the Contact Us page.
     *
     * @return View
     */
    public function contactUs(): View
    {
        return view('pages.contact_us');
    }

    /**
     * Display the Services page.
     *
     * @return View
     */
    public function services(): View
    {
        return view('pages.services');
    }

    /**
     * Display the Certification Program page.
     *
     * @return View
     */
    public function certificationProgram(): View
    {
        return view('pages.certification_program');
    }

    /**
     * Display the Request Certification page.
     *
     * @return View
     */
    public function requestCertification(): View
    {
        return view('pages.request_certification');
    }

    /**
     * Display the Certified Institutions page.
     *
     * @return View
     */
    public function certifiedInstitutions(): View
    {
        return view('pages.certified_institutions');
    }

    /**
     * Display the Memberships page.
     *
     * @return View
     */
    public function memberships(): View
    {
        return view('pages.memberships');
    }

    /**
     * Display the Antioquia page.
     *
     * @return View
     */
    public function antioquia(): View
    {
        return view('pages.antioquia');
    }

    /**
     * Display the Resource Center page.
     *
     * @return View
     */
    public function resourceCenter(): View
    {
        return view('pages.resource_center');
    }

    /**
     * Display the Young Leaders page.
     *
     * @return View
     */
    public function youngLeaders(): View
    {
        return view('pages.young-leaders');
    }

    /**
     * Display the Compelling Preaching page.
     *
     * @return View
     */
    public function compellingPreaching(): View
    {
        return view('pages.compelling_preaching');
    }

    /**
     * Display the Donations page.
     *
     * @return View
     */
    public function donations(): View
    {
        return view('pages.donations');
    }

    /**
     * Display the AETH Fund page.
     *
     * @return View
     */
    public function aethFund(): View
    {
        return view('pages.aeth_fund');
    }

    /**
     * Display the González Center page.
     *
     * @return View
     */
    public function gonzalezCenter(): View
    {
        return view('pages.gonzalez_center');
    }

    /**
     * Display the Test page.
     *
     * @return View
     */
    public function test(): View
    {
        return view('pages.test');
    }

    /**
     * Display the Web Application page with FAQs.
     *
     * Fetches FAQs from the database and passes them to the view.
     *
     * @return View
     */
    public function webApplication(): View
    {
        $faqs = Faq::all();
        return view('pages.web-application', compact('faqs'));
    }

    /**
     * Display the Application page.
     *
     * @return View
     */
    public function application(): View
    {
        return view('pages.application');
    }

    /**
     * Display the Capacity Building page.
     *
     * @return View
     */
    public function capacityBuilding(): View
    {
        return view('pages.capacity-building');
    }

    /**
     * Display the Lecture Series 2025 page.
     *
     * @return View
     */
    public function lectureSeries2025(): View
    {
        return view('pages.lecture-series-2025');
    }


    /**
     * Display the Help Desk page.
     *
     * @return View
     */

    public function helpDesk(): View
    {
        return view('pages.help-desk');
    }

    public function calendar(): View
    {
        return view('pages.calendar');
    }
    public function nishplc(): View
    {
        return view('pages.hispanic-initiative');
    }

    public function grantees(): View
    {
        return view('pages.hispanic-initiative-grantees');
    }

    /* temp url for approval */
    public function ls20259444401(): View
    {
        return view('pages.tests.ls20259444401');
    }
    public function youngLideres20259444401(): View
    {
        return view('pages.tests.youngLideres20259444401');
    }


}
