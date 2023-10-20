<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::create([
            'name'=> 'Rillo Raihan',
            'password'=> bcrypt('12345678'),
            'email'=> 'rilloraihan40702@gmail.com',
            ]);
        User::create([
            'name'=> 'Rakhasatria',
            'password'=> bcrypt('12345678'),
            'email'=> 'rakhasatria40702@gmail.com',
            ]);

            Post::create([
                'category_id' => 2,
                'user_id' => 2,
                'title' => 'Judul Empat',
                'slug' => 'judul-empat',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. .',
                'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. lorem10',
            ]);
    
            Post::create([
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Judul Kedua',
                'slug' => 'judul-kedua',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            ]);
    
            Post::create([
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Judul Ketiga',
                'slug' => 'judul-ketiga',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            ]);
    }
}
