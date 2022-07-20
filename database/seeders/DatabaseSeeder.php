<?php

namespace Database\Seeders;

use App\Models\Blog\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        // factory(\App\Models\Blog\BlogPost::class, 100)->create();
        BlogPost::factory(100)->create();
    }
}
