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
        //
      /*   $post = new Post();
        $post->title ='La cueva negra';
        $post->content = 'Cd';
        $post->category = 'Comedy';
        $post->save();

        $post = new Post();
        $post->title ='The fash furius';
        $post->content = 'Cd';
        $post->category = 'Acction';
        $post->published_at = now();
        $post->save(); */
        Post::factory(100)->create();

    }
}
