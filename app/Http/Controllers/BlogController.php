<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // view page
    public function index()
    {
        $posts = \Canvas\Models\Post::published()->with(['user', 'topic', 'tags'])->orderByDesc('published_at')->get();

        $posts->map(function ($post) {
            $post->topic = $post->topic->pluck('name');
            $post->tags = $post->tags->pluck('name');
            $post->avatar_user = $post->user->pluck('avatar')->first();

            return $post;
        });

        return view('blog', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        $post_show = \Canvas\Models\Post::with('user', 'tags', 'topic')->published()->get();
        $post = $post_show->firstWhere('slug', $slug);

        if (optional($post)->published) {
            $data = [
                'author' => $post->author,
                'post' => $post,
                'meta' => $post->meta,
            ];

            event(new \Canvas\Events\PostViewed($post));

            return view('blog_show', compact('data'));
        } else {
            abort(404);
        }
    }

    public function getPostByTag($slug)
    {
        # code...
    }
}
