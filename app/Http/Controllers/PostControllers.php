<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostControllers extends Controller
{
    public function index()
    {
        return view(
            '/halaman/blog',
            [
                'title' => 'Blog All',
                'active' => 'blog',
                // 'blog' => Post::all()
                'blog' => Post::latest()->get()
            ],
        );
    }

    public function show(Post $post)
    {
        return view(
            '/halaman/singlePost',
            [
                'title' => 'single Blog',
                'active' => 'blog',
                'isi' => $post
            ]
        );
    }
}
