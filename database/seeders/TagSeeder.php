<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tagsNames = [
            'Sad',
            'Hilarious',
            'Dramatic',
            'News',
            'Historic',
            'LongRead',
            'QuickRead',
        ];
        foreach($tagsNames as $tagName){
            $newTag = new Tag();
            $newTag->name = $tagName;
            $newTag->color = $faker->unique()->hexColor();
            $newTag->save();
        }


    }
}
