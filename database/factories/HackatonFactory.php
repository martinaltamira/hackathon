<?php

namespace Database\Factories;

use App\Models\Hackaton;
use Illuminate\Database\Eloquent\Factories\Factory;

class HackatonFactory extends Factory
{

    protected $model = Hackaton::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Java', 'Python', 'Php', 'C/C++', 'Javascript']),
            'place' => $this->faker->city(),
            'date' => $this->faker->date()
        ];
    }
}
