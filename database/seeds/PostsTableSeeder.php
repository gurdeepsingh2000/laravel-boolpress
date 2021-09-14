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
        for($i = 0; $i < 50; $i++){
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