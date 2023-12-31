<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
function loremWebSite () {
    return 'https://loremflickr.com/640/360';
}
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;

    public function definition(): array
    {
        

        return [
            'titre' => fake()->name(),
            'contenu' => fake()->sentence(),
            'image' =>  loremWebSite(),
            'id_user' => fake()->numberBetween(1,10),
        ];
    }
}
