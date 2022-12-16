<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// Models
use App\Models\Vendeur;
use App\Models\Boutique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boutique>
 */
class BoutiqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vendeur_id' => Vendeur::factory()->create()->id,
            'addresse_boutique' => 'Doula Rond point Derdeau',
            'nom_boutique' => 'Shopping center'
        ];
    }
}
