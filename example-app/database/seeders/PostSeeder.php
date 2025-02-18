<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        
        $post->title = 'title';
        $post->content = 'content';
        $post->category = 'category';
        $post->published_at = now();
        $post->save();
    }
}
