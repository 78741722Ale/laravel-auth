<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker )
    {
        // Avvio del ciclo for
        for ($i=0; $i < 10 ; $i++) {
            $post = new Post();
            $post->title = $faker->sentence(3); // un titolo da 3 parole
            $post->slug = Str::slug($post->title, '-'); // prende la stringa e separa coi trattini
            $post->cover = $faker->imageUrl(600, 300, 'Post', true, $post->slug, true);
            $post->content = $faker->text(500); // testo da 500 parole
            $post->save();
        }
    }
}
