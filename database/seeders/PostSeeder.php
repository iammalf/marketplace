<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Image;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(50)->create();

        foreach ($posts as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);

            //CONCATENAMOS UN POST CON 2 ESTIQUETAS AL AZAR
            //DONDE tags ES EL NOMBRE DE LA FUNCION QUE CREAMOS EN
            // PARA LA RELACION DE MUCHOS A MUCHOS EN MODELO POST
            $post->tags()->attach([
                rand(1, 4),
                rand(5, 8)
            ]);
        }
    }
}
