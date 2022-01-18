<?php

use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 3; $i++) {
            $newPost = new Post();
            $newPost->heading = $faker->words(2, true);
            $newPost->content = $faker->sentence(5);
            $newPost->attachments = $faker->imageUrl(860, 400, 'travel');
            $newPost->post_date = $faker->date();
            $newPost->author = $faker->words(2, true);
            $newPost->save();
        }
    }
}