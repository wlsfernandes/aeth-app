<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortalContent;
use App\Models\Member;

/**
 * Class AdminController
 *
 * Handles administrative functions such as rendering exclusive pages,
 * fetching portal contents based on event or program, and displaying
 * user profile information.
 *
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * Display the profile page for the authenticated user.
     *
     * This method loads the authenticated user's details and related member
     * information, then passes them to the profile view.
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        $user = auth()->user()->load('member');
        $member = Member::where('user_id', $user->id)->first();
        return view('pages.exclusive.profile', compact('user', 'member'));
    }

    /**
     * Display the audio page.
     *
     * @return \Illuminate\View\View
     */
    public function audio()
    {
        return view('pages.exclusive.audio');
    }

    /**
     * Display the article page.
     *
     * @return \Illuminate\View\View
     */
    public function article()
    {
        return view('pages.exclusive.article');
    }

    /**
     * Display the category page.
     *
     * @return \Illuminate\View\View
     */
    public function category()
    {
        return view('pages.exclusive.category');
    }

    /**
     * Display a list of portal contents for AETH Events.
     *
     * Contents are filtered by the 'AETH Events' event and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function aethEvents()
    {
        $portal_contents = PortalContent::where('event', 'AETH Events')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.aeth-events', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for Assemblies.
     *
     * Contents are filtered by the 'Assemblies' event and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function assemblies()
    {
        $portal_contents = PortalContent::where('event', 'Assemblies')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.assemblies', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for Conversatorios.
     *
     * Contents are filtered by the 'Conversatorios' event and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function conversatorios()
    {
        $portal_contents = PortalContent::where('event', 'Conversatorios')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.conversatorios', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Lecture Series.
     *
     * Contents are filtered by the 'Lecture Series' event and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function lectures()
    {
        $portal_contents = PortalContent::where('event', 'Lecture Series')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.lectures', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the 3ELET event.
     *
     * Contents are filtered by the '3ELET' event and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function elet()
    {
        $portal_contents = PortalContent::where('event', '3ELET')
            ->orderBy('date_of_publication', 'desc')
            ->get();
        // Note: View name may need to be corrected if it was intended to be different.
        return view('pages.exclusive.conversatorios', compact('portal_contents'));
    }

    /**
     * Display the programs page.
     *
     * @return \Illuminate\View\View
     */
    public function programs()
    {
        return view('pages.exclusive.programs');
    }

    /**
     * Display the event search page.
     *
     * @return \Illuminate\View\View
     */
    public function findByEvent()
    {
        return view('pages.exclusive.find-event');
    }

    /**
     * Display a list of portal contents for the AETH program.
     *
     * Contents are filtered by the 'AETH' program and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function aethProgram()
    {
        $portal_contents = PortalContent::whereHas('programs', function ($query) {
            $query->where('name', 'AETH');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.aeth-program', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Antioquia exclusive program.
     *
     * Contents are filtered by the 'Antioquia' program and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function antioquiaExclusive()
    {
        $portal_contents = PortalContent::whereHas('programs', function ($query) {
            $query->where('name', 'Antioquia');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.antioquia', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Capacity Building exclusive program.
     *
     * Contents are filtered by the 'Capacity Building' program and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function capacityBuildingExclusive()
    {
        $portal_contents = PortalContent::whereHas('programs', function ($query) {
            $query->where('name', 'Capacity Building');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.capacity-building', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Compelling Preaching exclusive program.
     *
     * Contents are filtered by the 'Compelling Preaching' program and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function compellingPreachingExclusive()
    {
        $portal_contents = PortalContent::whereHas('programs', function ($query) {
            $query->where('name', 'Compelling Preaching');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.compelling-preaching', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the González Center exclusive program.
     *
     * Contents are filtered by the 'González Center' program and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function gonzalezExclusive()
    {
        $portal_contents = PortalContent::whereHas('programs', function ($query) {
            $query->where('name', 'González Center');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.gonzalez', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Young Líderes exclusive program.
     *
     * Contents are filtered by the 'Young Líderes' program and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function youngLideresExclusive()
    {
        $portal_contents = PortalContent::whereHas('programs', function ($query) {
            $query->where('name', 'Young Líderes');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.young-lideres', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Articles category.
     *
     * Contents are filtered by the 'Articles' category and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function articles()
    {
        $portal_contents = PortalContent::whereHas('categories', function ($query) {
            $query->where('name', 'Articles');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.articles', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Bible Studies category.
     *
     * Contents are filtered by the 'Bible Studies' category and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function bibleStudies()
    {
        $portal_contents = PortalContent::whereHas('categories', function ($query) {
            $query->where('name', 'Bible Studies');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.bible-studies', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Conference category.
     *
     * Contents are filtered by the 'Conference' category and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function conference()
    {
        $portal_contents = PortalContent::whereHas('categories', function ($query) {
            $query->where('name', 'Conference');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.conference', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Sermons category.
     *
     * Contents are filtered by the 'Sermons' category and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function sermons()
    {
        $portal_contents = PortalContent::whereHas('categories', function ($query) {
            $query->where('name', 'Sermons');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.sermons', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Workshops category.
     *
     * Contents are filtered by the 'Workshops' category and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function workshops()
    {
        $portal_contents = PortalContent::whereHas('categories', function ($query) {
            $query->where('name', 'Workshop');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.workshops', compact('portal_contents'));
    }

    /**
     * Display a list of portal contents for the Others category.
     *
     * Contents are filtered by the 'Others' category and ordered by publication date.
     *
     * @return \Illuminate\View\View
     */
    public function others()
    {
        $portal_contents = PortalContent::whereHas('categories', function ($query) {
            $query->where('name', 'Others');
        })
            ->orderBy('date_of_publication', 'desc')
            ->get();
        return view('pages.exclusive.others', compact('portal_contents'));
    }

    /**
     * Display the detailed view of a specific portal content.
     *
     * This method fetches a portal content by its ID. If the content is not found,
     * a 404 error is thrown.
     *
     * @param int $id The ID of the portal content.
     * @return \Illuminate\View\View
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function showContent($id)
    {
        $portal_content = PortalContent::findOrFail($id);
        return view('pages.exclusive.content-view', compact('portal_content'));
    }
}
