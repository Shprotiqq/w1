<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => ucfirst('Септик ') .$this->faker->numberBetween(1, 100),
            'thumbnail' => $this->faker->fixturesImage('articles', 'articles'),
            'prefix' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'rating' => $this->faker->numberBetween(0,5),
            'active' => $this->faker->boolean(),
            'price' => $this->faker->numberBetween(1, 200000),
            'files' => [],
            'data' => [],
            'code' => ''
        ];
    }
}
