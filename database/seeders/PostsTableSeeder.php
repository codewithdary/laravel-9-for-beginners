<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'Summary of Post One',
                'body' => 'Content of Post One',
                'image_path' => 'Empty for now',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'Summary of Post Two',
                'body' => 'Content of Post Two',
                'image_path' => 'Empty for now',
                'is_published' => false,
                'min_to_read' => 4,
            ]
        ];

        foreach($posts as $key => $value) {
            Post::create($value);
        }
    }
}