<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperFactory extends Factory
{
    protected $model = Developer::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender'=> $this->faker->randomElement(['G', 'M']),
            'email' => $this->faker->email(),
            'location' => $this->faker->address()
        ];
    }
}
