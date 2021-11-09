<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Film;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Film::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'name' => $this->faker->words(3, true),
            'release_date' => $this->faker->year(),
            'genre' => $this->faker->randomElement(['aventure', 'drame', 'horreur', 'policier', 'science-fiction', 'thriller']),
        ];
    }
}
