<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var sting
     */
   protected $model = Etudiant::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'age' => $this->faker->date,
            'email' => $this->faker->unique()->safeEmail(),
            'numero' => $this->faker->number,
        ];
    }
}
