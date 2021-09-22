<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $genereList = [
            'thriller',
            'avventura',
            'azione',
            'romanzo',
            'biografia',
            'fantascienza'
        ];

        for($i = 0; $i < 50; $i++){
            $postGenre = new PostGenre();
            $genreKey = array_rand($genereList, 1);
            $genre = $genereList[$genreKey];
            $postGenre->name = $genre;
            $postGenre->save();

            $PostObj = new Post();
            $PostObj->name = $faker->name(1);
            $PostObj->surname = $faker->name(1);
            $PostObj->likes = $faker->numberBetween(0, 90000);
            $PostObj->comments = $faker->numberBetween(0, 90000);
            $PostObj->cover = $faker->imageUrl(640, 480, 'animals', true);
            $PostObj->place = $faker->countryCode();
            $PostObj->save();
        }
    }
}