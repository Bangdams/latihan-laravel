<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControllers extends Controller
{
    public function index(Category $category)
    {
        return view(
            '/halaman/category',
            [
                'title' => 'single Blog',
                'blog' => $category->post,
            ]
        );
    }
}