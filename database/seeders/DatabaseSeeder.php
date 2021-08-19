<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	// User::create([
    	// 	'name' => 'Sadam',
    	// 	'email' => 'Sadam@gmail.com',
    	// 	'password' => bcrypt('12345')
    	// ]);

     //    User::create([
     //        'name' => 'Dodi',
     //        'email' => 'Dodi@gmail.com',
     //        'password' => bcrypt('12345')
     //    ]);

        User::factory(3)->create();

    	Category::create([
    		'nama' => 'Teknologi.jpg',
    		'slug' => 'teknologi'
    	]);

        Category::create([
            'nama' => 'Politik.jpg',
            'slug' => 'politik'
        ]);

        Post::factory(10)->create();

    	// Post::create(['category_id' => 2, 'user_id' => 1 , 'judul' => 'judul ke satu', 'slug' => 'judul-ke-satu' ,'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit','isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.']);

    	// Post::create(['category_id' => 2, 'user_id' => 2 , 'judul' => 'judul ke dua', 'slug' => 'judul-ke-dua' ,'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit','isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.']);

     //    Post::create(['category_id' => 3, 'user_id' => 1 , 'judul' => 'judul ke tiga', 'slug' => 'judul-ke-tiga' ,'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit','isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.']);


    }
}