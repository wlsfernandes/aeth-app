<?php

namespace App\Http\Controllers;
use App\Models\Post;



class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(6); 

        return view('pages.post', compact('posts'));
    }

    public function show($slug)
    {
        // Find the post by slug, ensuring it is published
        $post = Post::where('slug', $slug)->where('published', true)->firstOrFail();
    
        // Return the view with the post data
        return view('pages.post_show', compact('post'));
    }

}
