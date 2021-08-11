<?php

namespace Database\Factories;

use App\Models\Batiments;
use Illuminate\Database\Eloquent\Factories\Factory;

class BatimentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Batiments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->firstName(),
            'description'=> $this->faker->name()
        ];
    }
}
