<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_post = new Post();

            $new_post->title = $faker->sentence(5);
            $new_post->content = $faker->text(500);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->save();
        }
    }
}
