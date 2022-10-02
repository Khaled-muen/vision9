<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'title'=> $this->faker->words(4,true),
        'content'=> $this->faker->paragraphs(5,true),
        'image'=> $this->faker->imageUrl()
        ];
    }
}
