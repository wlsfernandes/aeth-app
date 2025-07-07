<?php

namespace App\Http\Controllers;

use App\Models\DigitalCollection;
use App\Models\Copyright;
use App\Models\Series;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Http\RedirectResponse;





/**
 * Class DigitalCollectionController
 *
 * Handles retrieving and displaying digital collections.
 *
 * @package App\Http\Controllers
 */
class DigitalCollectionController extends Controller
{

    public function globalSearch(Request $request)
    {
        $keyword = $request->input('search-input');
        $lang = 'english';

        $digitalCollections = DigitalCollection::query()
            ->where(function ($q) use ($keyword, $lang) {
                $q->whereRaw('full_text_vector @@ plainto_tsquery(?, ?)', [$lang, $keyword])
                    ->orWhere('title', 'ILIKE', "%{$keyword}%")
                    ->orWhere('subject', 'ILIKE', "%{$keyword}%");
            })
            ->paginate(12)->appends($request->query());

        return view('pages.exclusive.gonzalez.gonzalez-acervo', compact('digitalCollections'));
    }



    public function cloud()
    {
        $digitalCollections = DigitalCollection::published()->get();
        return view('pages.exclusive.gonzalez.gonzalez-tag-cloud', compact('digitalCollections'));
    }

    public function filter(Request $request)
    {
        $tag = $request->query('tag');

        if (!$tag) {
            return redirect()->route('tag.cloud')->with('error', 'No tag selected.');
        }

        $digitalCollections = DigitalCollection::published()
            ->where('subject', 'ILIKE', "%$tag%")
            ->paginate(12)->appends($request->query());

        return view('pages.exclusive.gonzalez.gonzalez-acervo', compact('tag', 'digitalCollections'));
    }

    public function all(): View|RedirectResponse
    {
        try {
            // Retrieve all published digital collections
            $digitalCollections = DigitalCollection::published()->paginate(12);

            return view('pages.exclusive.gonzalez.gonzalez-acervo', compact('digitalCollections'));
        } catch (Exception $e) {
            // Log the error for debugging
            Log::error('Error fetching digitalCollections: ' . $e->getMessage());

            // Display an error message and redirect back
            session()->now('error', 'An error occurred while fetching digitalCollections.');
            return redirect()->back();
        }
    }
    public function selector(): View|RedirectResponse
    {
        try {
            $seriess = Series::all();
            $copyrights = Copyright::all();
            $types = DigitalCollection::getTypeOfDocument();
            $creators = DigitalCollection::getCreator();
            return view('pages.exclusive.gonzalez.gonzalez-selector', compact('seriess', 'copyrights', 'types', 'creators'));
        } catch (Exception $e) {
            Log::error('Error fetching digitalCollections: ' . $e->getMessage());
            session()->now('error', 'An error occurred while fetching digitalCollections.');
            return redirect()->back();
        }
    }

    public function selectedOptions(Request $request): View|RedirectResponse
    {
        try {
            $query = DigitalCollection::published();

            // Dynamic filters
            if ($request->filled('title')) {
                $query->where('title', 'ILIKE', '%' . $request->input('title') . '%');
            }
            if ($request->filled('occasion')) {
                $query->where('occasion', 'ILIKE', '%' . $request->input('occasion') . '%');
            }
            if ($request->filled('description')) {
                $query->where('description', 'ILIKE', '%' . $request->input('description') . '%');
            }
            if ($request->filled('tag')) {
                $query->where('subject', 'ILIKE', '%' . $request->input('subject') . '%');
            }
            if ($request->filled('creator')) {
                $query->where('creator', 'ILIKE', '%' . $request->input('creator') . '%');
            }
            if ($request->filled('series_id')) {
                $query->where('series_id', '=', $request->input('series_id'));
            }
            if ($request->filled('copyright_id')) {
                $query->where('copyright_id', '=', $request->input('copyright_id'));
            }

            if ($request->filled('publisher')) {
                $query->where('publisher', 'ILIKE', '%' . $request->input('publisher') . '%');
            }

            if ($request->filled('typeOfDocument')) {
                $query->where('typeOfDocument', $request->input('typeOfDocument'));
            }

            if ($request->filled('dateOfPublication')) {
                $query->whereDate('dateOfPublication', $request->input('dateOfPublication'));
            }
            $digitalCollections = $query->paginate(12)->appends($request->query());

            return view('pages.exclusive.gonzalez.gonzalez-acervo', compact('digitalCollections'));
        } catch (Exception $e) {
            Log::error('Error fetching digitalCollections: ' . $e->getMessage());
            session()->now('error', 'An error occurred while fetching digitalCollections.');
            return redirect()->back();
        }
    }

    public function browseCollections(): View|RedirectResponse
    {
        try {
            $seriess = Series::whereHas('digitalCollections', function ($query) {
                $query->published();
            })->paginate(12);

            return view('pages.exclusive.gonzalez.gonzalez-browse-collections', compact('seriess'));
        } catch (Exception $e) {
            Log::error('Error fetching digitalCollections series: ' . $e->getMessage());
            session()->now('error', 'An error occurred while fetching digitalCollections series.');
            return redirect()->back();
        }
    }

    public function itemCollection($id): View|RedirectResponse
    {
        try {
            $digitalCollections = DigitalCollection::published()->where('series_id', $id)->paginate(12);
            return view('pages.exclusive.gonzalez.gonzalez-acervo', compact('digitalCollections'));
        } catch (Exception $e) {
            Log::error('Error fetching digitalCollections series: ' . $e->getMessage());
            session()->now('error', 'An error occurred while fetching digitalCollections series.');
            return redirect()->back();
        }
    }

    public function accessItem($id): View|RedirectResponse
    {
        try {
            $digitalCollection = DigitalCollection::with(['series', 'copyright'])->findOrFail($id);
            return view('pages.exclusive.gonzalez.gonzalez-access', compact('digitalCollection'));
        } catch (Exception $e) {
            Log::error('Error fetching digitalCollections series: ' . $e->getMessage());
            session()->now('error', 'An error occurred while fetching digitalCollections series.');
            return redirect()->back();
        }
    }



    /**
     * Display the digital collection (Acervo).
     *
     * This method retrieves all published digital collections from the database and
     * passes them to the corresponding view. If an error occurs, it logs the error
     * and redirects the user back with an error message.
     *
     * @return View|RedirectResponse Returns the view with the digital collections if successful,
     *                               otherwise redirects back with an error message.
     */
    public function acervo(): View|RedirectResponse
    {
        try {
            // Retrieve all published digital collections
            $digitalCollections = DigitalCollection::where('workflow', 'Published')->paginate(12);

            return view('pages.exclusive.gonzalez.gonzalez-acervo', compact('digitalCollections'));
        } catch (Exception $e) {
            // Log the error for debugging
            Log::error('Error fetching digitalCollections: ' . $e->getMessage());

            // Display an error message and redirect back
            session()->now('error', 'An error occurred while fetching digitalCollections.');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $digitalCollection = DigitalCollection::findOrFail($id);
        return view('pages.exclusive.gonzalez.digital-collections-details', compact('digitalCollection'));
    }
}
