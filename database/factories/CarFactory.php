<?php

namespace Database\Factories;

use App\Repositories\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model' => $this->faker->firstName,
            'brand' => $this->faker->name,
            'color' => $this->faker->colorName,
            'price' => rand(1000000, 100000000) / 100,
            'year' => $this->faker->year
        ];
    }
}
