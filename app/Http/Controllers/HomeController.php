<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\HumanResource;
use App\Models\Post;
use App\Models\Faq;
use App\Models\Speaker;
use App\Models\Testimonial;
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
            ->where('date_of_publication', '<=', Carbon::today())
            ->orderBy('date_of_publication', 'desc')
            ->limit(3)
            ->get();

        $events = Post::where('published', true)
            ->whereHas('postType', function ($query) {
                $query->where('name', 'event');
            })
            ->where('published', true)
            ->where('date_of_publication', '<=', Carbon::today())
            ->orderBy('date_of_event', 'desc')
            ->limit(3)
            ->get();
        $testimonials = Testimonial::all();
        return view('home', compact('articles', 'events', 'testimonials'));
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
        $testimonials = Testimonial::all();
        return view('pages.testimonials', compact('testimonials'));
    }

    /**
     * Display the Our Team page.
     *
     * @return View
     */
    public function ourTeam(): View
    {
        $groupedResources = HumanResource::where('isActive', true)
            ->orderBy('order')
            ->get()
            ->groupBy('group');
        $boardMembers = Board::orderBy('order')
            ->get();
        return view('pages.our_team', compact('groupedResources', 'boardMembers'));
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
        $testimonials = Testimonial::whereHas('program', function ($query) {
            $query->where('name', 'Certification Program');
        })
            ->orderBy('order')
            ->get();
        return view('pages.certification_program', compact('testimonials'));
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
        $testimonials = Testimonial::whereHas('program', function ($query) {
            $query->where('name', 'Antioquia');
        })
            ->orderBy('order')
            ->get();
        return view('pages.antioquia', compact('testimonials'));
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

        $testimonials = Testimonial::whereHas('program', function ($query) {
            $query->where('name', 'Young Líderes');
        })
            ->orderBy('order')
            ->get();
        return view('pages.young-leaders', compact('testimonials'));
    }

    /**
     * Display the Compelling Preaching page.
     *
     * @return View
     */
    public function compellingPreaching(): View
    {
        $testimonials = Testimonial::whereHas('program', function ($query) {
            $query->where('name', 'Compelling Preaching');
        })
            ->orderBy('order')
            ->get();
        return view('pages.compelling_preaching', compact('testimonials'));
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
        $testimonials = Testimonial::whereHas('program', function ($query) {
            $query->where('name', 'Growth & Fundraising');
        })
            ->orderBy('order')
            ->get();
        return view('pages.aeth_fund', compact('testimonials'));
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
        $testimonials = Testimonial::whereHas('program', function ($query) {
            $query->where('name', 'Capacity Building');
        })
            ->orderBy('order')
            ->get();
        return view('pages.capacity-building', compact('testimonials'));
    }

    /**
     * Display the Lecture Series 2025 page.
     *
     * @return View
     * @var \Illuminate\Support\Collection|\App\Models\Speaker[] $speakers 
     * 
     *      */
    public function lectureSeries2025(): View
    {
        $speakers = Speaker::all();
        return view('pages.lecture-series-2025', compact('speakers'));
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
        $testimonials = Testimonial::whereHas('program', function ($query) {
            $query->where('name', 'Hispanic Initiative');
        })
            ->orderBy('order')
            ->get();
        return view('pages.hispanic-initiative', compact('testimonials'));
    }

    public function grantees(): View
    {
        return view('pages.hispanic-initiative-grantees');
    }

    /** @var \Illuminate\Support\Collection|\App\Models\Speaker[] $speakers */
    public function ls20259444401(): View
    {
        $speakers = Speaker::all();
        return view('pages.tests.ls20259444401', compact('speakers'));
    }
    public function youngLideres20259444401(): View
    {
        return view('pages.tests.youngLideres20259444401');
    }


}
