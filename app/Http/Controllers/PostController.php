<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::paginate(10);

        return view('posts', compact('posts'));
    }

    public function create()
    {
        return view('create-post');
    }

    public function store(Post $post)
    {
        $post->create(request()->all());

        return redirect()->route('home');
    }

    public function show(Post $post)
    {
        return view('single', compact('post'));
    }
}
