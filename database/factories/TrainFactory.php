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
            'azienda' => fake()-> company(),
            'stazione_partenza' => fake ()->city(),
            'stazione_arrivo' => fake ()->city(),
            'orario_partenza' => fake ()->dateTimeBetween('now', '+3 days'),
            'orario_arrivo' => fake ()->dateTimeBetween('-1 week', '+1 week'),
            'codice_treno' => fake ()->unique() -> numerify('train-#####') ,
            'numero_carrozze' => fake ()->numberBetween(5, 15),

        ];
    }
}
