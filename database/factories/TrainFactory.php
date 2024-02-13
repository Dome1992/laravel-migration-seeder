<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => $this->faker->sentence(['Trenitalia', 'Italo', 'Frecciarossa']),
            'stazione_partenza' => $this->faker->city,
            'stazione_arrivo' => $this->faker->city,
            'orario_partenza' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'orario_arrivo' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'codice_treno' => $this->faker->randomNumber(5),
            'numero_carrozze' => $this->faker->numberBetween(5, 15),
        ];
    }
}
