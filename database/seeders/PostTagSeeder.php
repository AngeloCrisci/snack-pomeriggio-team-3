<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $posts = Post::all();
        $tags = Tag::all()->pluck('id');
        foreach($posts as $post){
            $post->tags()->sync($faker->randomElements($tags,rand(1,3)));
        }
    }

}
