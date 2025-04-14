<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Carbon\Carbon;



class PostController extends Controller
{
    /**
     * Displays a paginated list of published blog posts.
     *
     * This method retrieves posts that are marked as published and belong to the 'blog' post type.
     * The posts are ordered by their publication date in descending order and paginated with
     * a limit of 3 posts per page.
     *
     * @return *\Illuminate\View\View Returns the blog posts view with paginated posts.
     */

    public function index()
    {
        $posts = Post::where('published', true)
            ->whereHas('postType', function ($query) {
                $query->where('name', 'blog');
            })
            ->where('published', true)
            ->whereDate('date_of_publication', '>=', Carbon::today())
            ->orderBy('published_at', 'desc')
            ->paginate(6);

        return view('pages.post', compact('posts'));
    }

    /**
     * Displays a single published blog post based on the provided slug.
     *
     * This method retrieves a post using its slug, ensuring that it is published.
     * If the post is not found, it returns a 404 error.
     *
     * @param string $slug The unique slug of the post.
     * @return *\Illuminate\View\View Returns the view displaying the blog post.
     *
     * @throws *\Illuminate\Database\Eloquent\ModelNotFoundException If the post is not found.
     */

    public function show($slug)
    {
        // Find the post by slug, ensuring it is published
        $post = Post::where('slug', $slug)->firstOrFail();

        // Return the view with the post data
        return view('pages.post_show', compact('post'));
    }


    /**
     * Displays a paginated list of published events.
     *
     * This method retrieves posts that are marked as published and belong to the 'event' post type.
     * The events are ordered by their publication date in descending order and paginated with
     * a limit of 3 events per page.
     *
     * @return *\Illuminate\View\View Returns the events view with paginated event posts.
     */

    public function showAllEvents()
    {
        $posts = Post::where('published', true)
            ->whereHas('postType', function ($query) {
                $query->where('name', 'event');
            })
            ->where('published', true)
            ->whereDate('date_of_publication', '<=', Carbon::today())
            ->orderBy('published_at', 'desc')
            ->paginate(3);

        return view('pages.events', compact('posts'));
    }

    public function showAllPages()
    {
        $posts = Post::where('published', true)
            ->whereHas('postType', function ($query) {
                $query->where('name', 'simple page');
            })
            ->where('published', true)
            ->whereDate('date_of_publication', '<=', Carbon::today())
            ->orderBy('published_at', 'desc')
            ->paginate(3);

        return view('pages.aeth-pages', compact('posts'));
    }


}
