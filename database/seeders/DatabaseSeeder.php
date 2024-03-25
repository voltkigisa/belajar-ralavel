<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // User::create([
            //     'name' => 'Raden Indra Prawirajaya',
            //     'email' => 'raden@gmail.com',
            //     'password' => bcrypt('12345'),
            // ]);
            // User::create([
                //     'name' => 'Prawirajaya',
                //     'email' => 'prawirajaya@gmail.com',
                //     'password' => bcrypt('12345'),
                // ]);
        
                
        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming', 
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal', 
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p><p> lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p><p> lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
}
}