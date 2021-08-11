<?php

namespace Database\Factories;

use App\Models\eleves;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElevesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = eleves::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->firstName(),
            'lastname'=> $this->faker->lastName(),
            'age'=> $this->faker->numberBetween(18,30),
            "demandeur d'emploie"=> $this->faker->boolean(),
        ];
    }
}
