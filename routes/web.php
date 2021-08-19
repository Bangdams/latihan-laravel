<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User; 
use App\Http\Controllers\PostControllers;
use App\Http\Controllers\LoginControllers;
use App\Http\Controllers\DaftarControlers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view(
        '/halaman/home',
        [
            'title' => 'Home',
            'active' => 'home',
            'nama' => 'sadam'
        ]
    );
});

Route::get('/about', function () {

    $alamat = [
        [
            'jalan' => 'raya cahyu',
            'rumah' => 'Warna Merah'
        ],
        [
            'jalan' => 'Pahlawan',
            'rumah' => 'warna Pink'
        ]
    ];

    return view(
        '/halaman/about',
        [
            'title' => 'About',
            'active' => 'about',
            'alamat' => $alamat
        ]
    );
});

Route::get('/blog', [PostControllers::class, 'index']);

Route::get('/single/{post:slug}', [PostControllers::class, 'show']);

Route::get('/categories', function () {
    return view('halaman/categories', [
        'title' => 'Halaman Category',
        'active' => 'category',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('/halaman/blog', [
        'title' => "Post Category: $category->slug",
        'active' => 'category',
        'blog' => $category->post,
    ]);
});

Route::get('/user/{user:username}', function (User $user)
    {
        return view('/halaman/blog', [
            'title' => "Blog Post By. $user->name",
            'blog' => $user->post->load('category','user')
    ]);
});

Route::get('/login', [LoginControllers::class, 'index']);

Route::get('/daftar', [DaftarControlers::class, 'index']);
Route::post('/daftar', [DaftarControlers::class, 'store']);