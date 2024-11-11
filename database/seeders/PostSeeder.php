<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //

        for($i = 0; $i < 30 ; $i++){
            $newPost = new Post();
            $newPost->title = $faker->unique->realTextBetween(5 , 10);
            $newPost->author = $faker->name();
            $newPost->thumb = $faker->imageUrl(360, 360 , 'animals' , true , 'dogs' , true , 'jpg');
            $newPost->date = $faker->date();
            $newPost->description = $faker->realTextBetween(100 , 200);
            $newPost->save();
        }



    }
}
